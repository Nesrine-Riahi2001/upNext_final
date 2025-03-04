<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Event; // Assure-toi que tu as importé l'entité Event
use Doctrine\ORM\EntityManagerInterface;


use Knp\Component\Pager\PaginatorInterface;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="view")
     * @return Response
     */
    #[Route(path: '/', name: 'view')]
    public function home()
    {

        return $this->render('accueil/index.html.twig');
    }

    #[Route('/home', name: 'home')]
    public function index(EntityManagerInterface $em): Response
    {
       // Récupérer tous les événements depuis la base de données
       $events = $em->getRepository(Event::class)->findAll();

       // Passer la variable 'events' à la vue
       return $this->render('home/home.html.twig', [
           'events' => $events, // Passe la liste des événements à la vue
       ]);
        
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('home/profile.html.twig');
    }

    #[Route('/profile/{id}', name: 'profile_view')]
    public function profileView(int $id, UserRepository $userRepository): Response
    {
        // Fetch the user by ID
        $user = $userRepository->find($id);
    
        // Handle case where user is not found
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
    
        return $this->render('home/profile_view.html.twig', [
            'user' => $user
        ]);
    }
    



    #[Route('/search', name: 'global_search')]
    public function search(
        Request $request, 
        UserRepository $userRepo, 
       // ProductRepository $productRepo, 
       // EventRepository $eventRepo, 
        PaginatorInterface $paginator
    ): Response {
        $searchTerm = $request->query->get('q', '');
    
        if (empty($searchTerm)) {
            return $this->redirectToRoute('home');
        }

    
        $user = $this->getUser();
    
        
    
    
        // Search Users
        $users = $userRepo->findBySearchQuery($searchTerm);
    
        // Search Products
       // $products = $productRepo->findBySearchQuery($searchTerm);
    
        // Search Events
     //   $events = $eventRepo->findBySearchQuery($searchTerm);
    
        // Paginate Results
        $usersPagination = $paginator->paginate($users, $request->query->getInt('page_users', 1), 5);
       // $productsPagination = $paginator->paginate($products, $request->query->getInt('page_products', 1), 5);
      //  $eventsPagination = $paginator->paginate($events, $request->query->getInt('page_events', 1), 5);
    
        return $this->render('home/search_result.html.twig', [
            'users' => $usersPagination,
          //  'products' => $productsPagination,
          //  'events' => $eventsPagination,
            'searchTerm' => $searchTerm,
        ]);
    }
    

    
}
