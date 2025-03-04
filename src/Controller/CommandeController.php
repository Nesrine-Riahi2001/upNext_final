<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeDeliveryType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

#[Route('/commande')]
final class CommandeController extends AbstractController
{
    #[Route(name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        $commandes = $commandeRepository->findAll();
        if (empty($commandes)) {
            $this->addFlash('info', 'Aucune commande trouvée.');
        }
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/statistics', name: 'app_commande_statistics', methods: ['GET'])]
public function statistics(CommandeRepository $commandeRepository): Response
{
    // Fetch all commands
    $commandes = $commandeRepository->findAll();

    // Initialize an array to store category counts
    $categoryStats = [
        'Dessin' => 0,
        'Peinture' => 0,
        'Sculpture' => 0,
        'Edition' => 0,
        'Photographie' => 0,
    ];

    // Count products by category across all commands
    foreach ($commandes as $commande) {
        foreach ($commande->getProduits() as $produit) {
            $category = $produit->getCategorie();
            if (array_key_exists($category, $categoryStats)) {
                $categoryStats[$category]++;
            }
        }
    }

    // Prepare data for the chart (filter out categories with 0 products)
    $labels = [];
    $data = [];
    foreach ($categoryStats as $category => $count) {
        if ($count > 0) {
            $labels[] = $category;
            $data[] = $count;
        }
    }

    return $this->render('commande/chart.html.twig', [
        'labels' => json_encode($labels), // Pass labels as JSON for JavaScript
        'data' => json_encode($data),     // Pass data as JSON for JavaScript
    ]);
}

// App\Controller\CommandeController.php

#[Route('/client', name: 'app_commande_client_list', methods: ['GET'])]
public function clientList(CommandeRepository $commandeRepository): Response
{
    $commandes = $commandeRepository->findAll();
    if (empty($commandes)) {
        $this->addFlash('info', 'Aucune commande trouvée.');
    }
    return $this->render('commande/client_list.html.twig', [
        'commandes' => $commandes,
    ]);
}

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $userId = 1; // À remplacer par une entité User réelle
        $userName = "John Doe";
        $location = "123 Rue Exemple, Paris";

        $form = $this->createForm(CommandeDeliveryType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deliveryDate = $form->get('delivery_date')->getData();
            $commandeDate = $commande->getDateCommande();

            if ($deliveryDate <= $commandeDate) {
                $this->addFlash('danger', 'La date de livraison doit être supérieure à la date de commande.');
                return $this->redirectToRoute('app_commande_show', ['id' => $commande->getId()]);
            }

            $commande->setStatus('Livrée');
            $commande->setDeliveryDate($deliveryDate);

            // Supprimer les produits de la commande après livraison
            foreach ($commande->getProduits() as $produit) {
                $produit->setCommande(null);
                $produit->setStatut('Livré');
                $entityManager->persist($produit);
            }

            $entityManager->flush();
            $this->addFlash('success', 'Commande confirmée comme livrée.');
            return $this->redirectToRoute('app_commande_index'); // Redirection vers la liste des commandes après validation
        }

        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
            'user_id' => $userId,
            'user_name' => $userName,
            'location' => $location,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $token = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $commande->getId(), $token)) {
            try {
                foreach ($commande->getProduits() as $produit) {
                    $produit->setCommande(null);
                    $produit->setStatut('Disponible');
                    $entityManager->persist($produit);
                }
                $entityManager->remove($commande);
                $entityManager->flush();
                $this->addFlash('success', 'Commande supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('danger', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/update-status', name: 'app_commande_update_status', methods: ['POST'])]
    public function updateStatus(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $newStatus = $request->request->get('status');
        $dateCommande = $commande->getDateCommande();
        $dateActuelle = new \DateTime();

        if ($dateCommande === null) {
            $this->addFlash('danger', 'Date de commande non définie.');
            return $this->redirectToRoute('app_commande_show', ['id' => $commande->getId()]);
        }
        if ($dateCommande > $dateActuelle) {
            $this->addFlash('danger', 'Date de commande invalide : elle ne peut pas être dans le futur.');
            return $this->redirectToRoute('app_commande_show', ['id' => $commande->getId()]);
        }

        $interval = $dateActuelle->diff($dateCommande);
        $diff = $interval->days;
        if ($interval->invert == 1) {
            $diff = -$diff;
        }

        if ($newStatus === 'Livrée') {
            return $this->redirectToRoute('app_commande_show', ['id' => $commande->getId()]);
        } elseif ($newStatus === 'Annulée') {
            if ($diff >= 0 && $diff <= 3) {
                $commande->setStatus('Annulée');
                foreach ($commande->getProduits() as $produit) {
                    $produit->setStatut('Disponible');
                    $produit->setCommande(null);
                    $entityManager->persist($produit);
                }
                $entityManager->flush();
                $this->addFlash('success', 'Commande annulée avec succès.');
            } else {
                $this->addFlash('danger', 'Annulation impossible : délai de 3 jours dépassé.');
            }
        } else {
            $this->addFlash('danger', 'Statut invalide. Statut soumis : ' . $newStatus);
        }

        $entityManager->flush();
        return $this->redirectToRoute('app_commande_index');
    }

    #[Route('/{id}/details', name: 'app_commande_details', methods: ['GET'])]
    public function details(Commande $commande): Response
    {
        $userId = 1; // À remplacer par une entité User réelle
        $userName = "John Doe";
        $location = "123 Rue Exemple, Paris";

        return $this->render('commande/details.html.twig', [
            'commande' => $commande,
            'user_id' => $userId,
            'user_name' => $userName,
            'location' => $location,
        ]);
    }

    // App\Controller\CommandeController.php

#[Route('/{id}/update-delivery', name: 'app_commande_update_delivery', methods: ['POST'])]
public function updateDelivery(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
{
    $deliveryDate = new \DateTime($request->request->get('delivery_date'));
    $commandeDate = $commande->getDateCommande();

    if ($deliveryDate <= $commandeDate) {
        $this->addFlash('danger', 'La date de livraison doit être supérieure à la date de commande.');
        return $this->redirectToRoute('app_commande_index');
    }

    $commande->setStatus('Livrée');
    $commande->setDeliveryDate($deliveryDate);

    // Mettre à jour le statut des produits
    foreach ($commande->getProduits() as $produit) {
        $produit->setStatut('Livré');
        $produit->setCommande(null);
        $entityManager->persist($produit);
    }

    $entityManager->flush();
    $this->addFlash('success', 'Date de livraison confirmée et commande marquée comme livrée.');
    
    return $this->redirectToRoute('app_commande_index');
}



#[Route('/{id}/send-email', name: 'app_mailer_send', methods: ['GET'])]
public function sendEmail(Commande $commande, MailerInterface $mailer): Response
{
    try {
        $email = (new TemplatedEmail())
            ->from('imen10chedly@gmail.com')
            ->to('imen10chedly@gmail.com') // Remplacez par l'email de l'utilisateur si nécessaire
            ->subject('Détails de la commande #' . $commande->getId())
            ->htmlTemplate('commande/email_template.html.twig')
            ->context(['commande' => $commande]);

        $mailer->send($email);
        $this->addFlash('success', 'Email envoyé avec succès à ' . $email->getTo()[0]->getAddress());
    } catch (\Exception $e) {
        $this->addFlash('danger', 'Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
        error_log('Email sending failed: ' . $e->getMessage());
    }

    return $this->redirectToRoute('app_commande_details', ['id' => $commande->getId()]);
}
}