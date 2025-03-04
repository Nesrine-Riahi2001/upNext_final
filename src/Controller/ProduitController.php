<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Commande;
use App\Service\CartService;
use App\Repository\CommandeRepository;

#[Route('/produit')]
final class ProduitController extends AbstractController
{
    // App\Controller\ProduitController.php

// Pour index
#[Route('/', name: 'app_produit_index', methods: ['GET'])]
public function index(ProduitRepository $produitRepository, Request $request): Response
{
    $nom = $request->query->get('nom');
    $prix = $request->query->get('prix') ? (float)$request->query->get('prix') : null;
    $categorie = $request->query->get('categorie');
    $sort = $request->query->get('sort');

    $produits = $produitRepository->findByAdvancedSearch($nom, $prix, $categorie, $sort);

    return $this->render('produit/index.html.twig', [
        'produits' => $produits,
    ]);
}

// Pour list
#[Route('/list', name: 'app_produit_list', methods: ['GET'])]
public function list(ProduitRepository $produitRepository, Request $request): Response
{
    $nom = $request->query->get('nom');
    $prix = $request->query->get('prix') ? (float)$request->query->get('prix') : null;
    $categorie = $request->query->get('categorie');
    $sort = $request->query->get('sort');

    $produits = $produitRepository->findByAdvancedSearch($nom, $prix, $categorie, $sort);
    $produits = array_filter($produits, fn($p) => $p->getApprovalStatus() === 'ACCEPTED' && $p->getCommande() === null);

    if (empty($produits)) {
        $this->addFlash('warning', 'Aucun produit approuvé trouvé.');
    }
    return $this->render('produit/list.html.twig', [
        'produits' => $produits,
    ]);
}

// Pour artist-list
#[Route('/artist-list', name: 'app_produit_artist_list', methods: ['GET'])]
public function artistList(ProduitRepository $produitRepository, Request $request): Response
{
    $nom = $request->query->get('nom');
    $prix = $request->query->get('prix') ? (float)$request->query->get('prix') : null;
    $categorie = $request->query->get('categorie');
    $sort = $request->query->get('sort');

    $produits = $produitRepository->findByAdvancedSearch($nom, $prix, $categorie, $sort);

    return $this->render('produit/artist-list.html.twig', [
        'produits' => $produits,
    ]);
}
  

    #[Route('/{id}/artist', name: 'app_produit_show_artist', methods: ['GET'])]
    public function showArtist(Produit $produit): Response
    {
        return $this->render('produit/show2.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/cart', name: 'app_cart_show', methods: ['GET'])]
    public function showCart(CartService $cartService, ProduitRepository $produitRepository): Response
    {
        $cartIds = $cartService->getCart() ?? [];
        $produits = $produitRepository->findBy(['id' => $cartIds]);
        return $this->render('produit/pannier.html.twig', [
            'produits' => $produits ?? [],
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $produit = new Produit();
        $produit->setApprovalStatus('PENDING');
        
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $produit->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->render('produit/new.html.twig', [
                        'produit' => $produit,
                        'form' => $form->createView(),
                    ]);
                }
            }
    
            try {
                $entityManager->persist($produit);
                $entityManager->flush();
    
                $this->addFlash('success', 'Produit soumis avec succès. En attente d\'approbation.');
                return $this->redirectToRoute('app_produit_artist_list');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de l\'enregistrement du produit : ' . $e->getMessage());
            }
        }
    
        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show1.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/admin', name: 'app_produit_show_admin', methods: ['GET'])]
    public function showAdmin(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->render('produit/edit.html.twig', [
                        'produit' => $produit,
                        'form' => $form,
                    ]);
                }

                $produit->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_produit_artist_list');
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($produit);
        $entityManager->flush();

        $this->addFlash('success', 'Produit supprimé avec succès.');
        return $this->redirectToRoute('app_produit_artist_list');
    }

    #[Route('/{id}/commander', name: 'app_produit_commander', methods: ['POST'])]
    public function commander(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $commande->setPrixTotal($produit->getPrix());
        $commande->setDateCommande(new \DateTime());
        $commande->setStatus('En attente');

        $commande->addProduit($produit);
        $produit->setCommande($commande);

        $entityManager->persist($commande);
        $entityManager->flush();

        $this->addFlash('success', 'Produit ajouté à la commande avec succès.');
        return $this->redirectToRoute('app_produit_list');
    }

    #[Route('/{id}/approve', name: 'app_produit_approve', methods: ['POST'])]
    public function approve(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('approve' . $produit->getId(), $request->request->get('_token'))) {
            $produit->setApprovalStatus('ACCEPTED');
            $entityManager->flush();
            $this->addFlash('success', 'Produit approuvé avec succès.');
        }

        return $this->redirectToRoute('app_produit_index');
    }

    #[Route('/{id}/reject', name: 'app_produit_reject', methods: ['POST'])]
    public function reject(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('reject' . $produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
            $this->addFlash('success', 'Produit rejeté et supprimé.');
        }

        return $this->redirectToRoute('app_produit_index');
    }

    #[Route('/cart/add/{id}', name: 'app_cart_add', methods: ['GET'])]
    public function addToCart(int $id, ProduitRepository $produitRepository, CartService $cartService): Response
    {
        $produit = $produitRepository->find($id);
        if (!$produit || $produit->getApprovalStatus() !== 'ACCEPTED' || $produit->getCommande() !== null) {
            $this->addFlash('danger', 'Produit non disponible.');
            return $this->redirectToRoute('app_produit_list');
        }
        
        $cartService->addProduct($id);
        $this->addFlash('success', 'Produit ajouté au panier avec succès.');
        return $this->redirectToRoute('app_produit_list');
    }

    #[Route('/cart/remove/{id}', name: 'app_cart_remove', methods: ['GET'])]
    public function removeFromCart(int $id, CartService $cartService): Response
    {
        $cartService->removeProduct($id);
        $this->addFlash('success', 'Produit supprimé du panier.');
        return $this->redirectToRoute('app_cart_show');
    }

    #[Route('/cart/confirm', name: 'app_cart_confirm', methods: ['GET'])]
    public function confirmCart(CartService $cartService, EntityManagerInterface $entityManager, ProduitRepository $produitRepository): Response
    {
        $cartIds = $cartService->getCart();
        if (empty($cartIds)) {
            $this->addFlash('danger', 'Le panier est vide.');
            return $this->redirectToRoute('app_produit_list');
        }

        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
        $commande->setStatus('En attente');
        $totalPrice = 0;

        $produits = $produitRepository->findBy(['id' => $cartIds]);
        foreach ($produits as $produit) {
            if ($produit->getApprovalStatus() === 'ACCEPTED' && $produit->getCommande() === null) {
                $commande->addProduit($produit);
                $produit->setCommande($commande);
                $totalPrice += $produit->getPrix();
                $entityManager->persist($produit);
            }
        }

        if ($commande->getProduits()->isEmpty()) {
            $this->addFlash('danger', 'Aucun produit valide dans le panier.');
            return $this->redirectToRoute('app_cart_show');
        }

        $commande->setPrixTotal($totalPrice);
        $entityManager->persist($commande);
        $entityManager->flush();
        $cartService->clearCart();

        $this->addFlash('success', 'Commande confirmée avec succès.');
        return $this->redirectToRoute('app_commande_index');
    }
}