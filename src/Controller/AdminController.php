<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Form\AdminType;
use Knp\Snappy\Pdf;
use Twig\Environment;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function home(): Response
    {

        return $this->render('admin/home.html.twig', [
        ]); 
    }

    #[Route('/admin/compte', name: 'app_admin_compte')]
    public function user(EntityManagerInterface $entityManager): Response
    {
        // Fetch all users
        $users = $entityManager->getRepository(User::class)->findAll();

        // Separate users by roles
        $artists = [];
        $clients = [];
        $admins = [];

        foreach ($users as $user) {
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                $admins[] = $user;
            } elseif (in_array('ROLE_ARTIST', $user->getRoles())) {
                $artists[] = $user;
            } elseif (in_array('ROLE_CLIENT', $user->getRoles())) {
                $clients[] = $user;
            }
        }

        return $this->render('admin/showUser.html.twig', [
            'artists' => $artists,
            'clients' => $clients,
            'admins' => $admins
        ]);
    }

    #[Route('/admin/user/edit/{id}', name: "admin_edit_user", methods: ["GET", "POST"])]
    public function editUser(Request $request, EntityManagerInterface $em, UserRepository $userRepo, $id): Response
    {
        $user = $userRepo->find($id);
    
        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('admin_dashboard');
        }
    
        // Create the form manually
        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType::class, [
                'label' => 'First Name',
                'attr' => ['class' => 'form-control']
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Last Name',
                'attr' => ['class' => 'form-control']
            ])
            ->add('speciality', ChoiceType::class, [
                'label' => 'Domaine de spécialité',
                'choices' => [
                    '----------' => '---------',
                    'Musique' => 'music',
                    'Peinture' => 'painting',
                    'Photographie' => 'photography',
                    'Danse' => 'dance',
                    'Animation' => 'animation',
                    'Sculpture' => 'sculpture',
                ],
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('isVerified', CheckboxType::class, [
                'label' => 'Verified',
                'required' => false,
            ])
           
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();
    
            $this->addFlash('success', 'User updated successfully');
            return $this->redirectToRoute('app_admin');
        }
    
        return $this->render('admin/edit_user.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/admin/user/delete/{id}', name: 'admin_delete_user', methods: ['POST', 'GET'])]
public function deleteUser(EntityManagerInterface $em, UserRepository $userRepo, $id): Response
{
    $user = $userRepo->find($id);

    if (!$user) {
        $this->addFlash('error', 'User not found');
        return $this->redirectToRoute('app_admin');
    }

    $em->remove($user);
    $em->flush();

    $this->addFlash('success', 'User deleted successfully');
    return $this->redirectToRoute('app_admin');
}
    
#[Route('/admin/user/deactivate/{id}', name: 'admin_deactivate_user', methods: ['POST'])]
public function deactivateUser(EntityManagerInterface $em, UserRepository $userRepo, $id): Response
{
    $user = $userRepo->find($id);

    if (!$user) {
        $this->addFlash('error', 'User not found');
        return $this->redirectToRoute('app_admin');
    }

    // Toggle active status
    $user->setIsActive(!$user->isActive());
    $em->persist($user);
    $em->flush();

    $status = $user->isActive() ? 'activated' : 'deactivated';
    $this->addFlash('success', "User has been $status.");
    
    return $this->redirectToRoute('app_admin');
}

#[Route('/admin/user/add', name: 'admin_add_user', methods: ['GET', 'POST'])]
public function addUser(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
{
    $user = new User();
    $form = $this->createForm(AdminType::class, $user);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Ensure the password is provided before hashing
        $plainPassword = $form->get('plainPassword')->getData();

        if ($plainPassword) {
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
        } else {
            $this->addFlash('danger', 'Password cannot be empty.');
            return $this->redirectToRoute('admin_add_user');
        }
    
        // Set default values
        $user->setRoles(['ROLE_ADMIN']);
        $user->setIsActive(true);
        $user->setSpeciality('---------');
    
        $em->persist($user);
        $em->flush();
    
        $this->addFlash('success', 'New admin added successfully.');
        return $this->redirectToRoute('app_admin');
    }
    

    return $this->render('admin/add_user.html.twig', [
        'form' => $form->createView(),
    ]);
}

#[Route('/admin/user/report', name: 'admin_user_report')]
public function generateReport(EntityManagerInterface $em, Pdf $pdf, Environment $twig): Response
{
    // Fetch all users
    $users = $em->getRepository(User::class)->findAll();


    

    // Generate HTML using Twig
    $html = $twig->render('admin/user_report.html.twig', [
        'users' => $users
    ]);

    // Generate PDF
    $pdfContent = $pdf->getOutputFromHtml($html);

    // Return PDF response
    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="user_report.pdf"',
    ]);

}





#[Route('/admin/search', name: 'home_search')]
public function search(Request $request, UserRepository $repo, PaginatorInterface $paginator): Response
{
    $searchTerm = $request->query->get('q', ''); // Get search term

    // If search term is empty, do not query
    if (empty($searchTerm)) {
        return $this->redirectToRoute('app_admin_compte');
    }

    // Search for users (modify the repository to include email, firstName, lastName search)
    $users = $repo->findBySearchQuery($searchTerm);

    // Paginate results
    $pagination = $paginator->paginate(
        $users,
        $request->query->getInt('page', 1),
        5 // Adjust number per page
    );

    // Render a separate search results page
    return $this->render('admin/search.html.twig', [
        'users' => $pagination,
        'searchTerm' => $searchTerm,
    ]);
}



}










