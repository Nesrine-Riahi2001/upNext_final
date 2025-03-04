<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Reclamation;
use App\Entity\Suivi;
use App\Form\EditSuiviAdminType;
use App\Form\ReclamationType;
use App\Form\SuiviType;
use App\Form\ModifierRecType;
use App\Form\ModifierSuiviType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use App\Repository\SuiviRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Form\RechercheRecType;
use App\Form\TrieRecType;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use PHPMailer\PHPMailer\PHPMailer;
use Twilio\Rest\Client;
use Symfony\Component\Security\Core\Security;
use Twilio\Http\CurlClient;
use App\Service\OpenRouterService;
use Symfony\Component\HttpFoundation\JsonResponse;

// require_once 'C:/Users/DELL/Desktop/SymfonyRecMariem/MariemReclamationCopie/vendor/autoload.php';

final class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation')]
    public function index(): Response
    {
        
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'HelloMariem',
        ]);
    }

    #[Route('/Home', name: 'app_home')]
    public function baseClient(): Response
    {
        
        return $this->render('baseClient.html.twig', [
           
        ]);
    }
 // Action pour afficher la liste des réclamations
 #[Route('/reclamations', name: 'app_reclamations')]
 public function showReclamations(Request $request,ReclamationRepository $recRepo,Security $security): Response
 {

    $user = $security->getUser();

    // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de login
    if (!$user) {
        return $this->redirectToRoute('app_login');
    }

    // Récupérer les réclamations de l'utilisateur connecté
    $reclamations = $recRepo->findBy(['user' => $user]);  

     // Récupérer toutes les réclamations depuis la base de données
    //  $reclamations = $recRepo->findAll(); 
    $recTrie = $recRepo->findAlltri($user); // Passer le user connecté


     // Création du formulaire
     $form = $this->createForm(RechercheRecType::class);
     $form->handleRequest($request);

     $formTrie = $this->createForm(TrieRecType::class);
     $formTrie->handleRequest($request);
     // Récupérer les données de recherche

    //  $type = $data['TypeRec'] ?? null;
    //  $status = $data['StatusRec'] ?? null;
 
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $search = $data['mots'] ?? null;
        $reclamationRecherchées = $recRepo->searchReclamations($search,$user);  // Appel de la méthode de recherche
        
        return $this->render('reclamation/showReclamations.html.twig', [
            'reclamations' => $reclamationRecherchées,
           //  'search' => $search
           'form' => $form,
           'formTrie'=>$formTrie
        ]);
    }
    else if($formTrie->isSubmitted()) {

        return $this->render('reclamation/showReclamations.html.twig', [
            'reclamations' => $recTrie,
           //  'search' => $search
           'form' => $form,
           'formTrie'=>$formTrie
        ]);    
    }
   
    return $this->render('reclamation/showReclamations.html.twig', [
        'reclamations' => $reclamations,
       //  'search' => $search
       'form' => $form,
       'formTrie'=>$formTrie
    ]);
     // Recherche dans la base de données
    //  $reclamations = $recRepo->findAll();

    // $reclamations = $recRepo->findAll();
     // Passer les réclamations à la vue
     
 }
#[Route('/ajouterRec', name: 'app_ajout_reclamation')]
    public function ajoutRecClient(Request $request,EntityManagerInterface $entityManager,Security $security): Response
    {
         // Crée une nouvelle instance de l'entité Reclamation
         $reclamation = new Reclamation();

         // Crée le formulaire avec l'entité Reclamation
         $form = $this->createForm(ReclamationType::class, $reclamation);
 
         // Traite la requête du formulaire (si POST)
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {

                // Récupérer l'utilisateur connecté
        $user = $security->getUser();
        
        if ($user) {
            // Associer l'utilisateur connecté à la réclamation
            $reclamation->setUser($user);
            $reclamation->setMailClientRec($user->getEmail()); // Stocker l'email du client connecté
        } else {
            $this->addFlash('error', 'Utilisateur non connecté.');
            return $this->redirectToRoute('app_login'); // Rediriger vers la connexion si non connecté
        }

             // Sauvegarde de la réclamation (ajoutez votre logique d'enregistrement ici)
             // Par exemple :
            //  $entityManager = $this->getDoctrine()->getManager();
            $reclamation->setDateCreationRec(new \DateTime());  // Date actuell
            $reclamation->setStatusRec('Ouvert');  // Date actuell

            $file = $form->get('file')->getData();
            if ($file) {
                // Déplace le fichier dans un dossier spécifique
                    $destination = $this->getParameter('kernel.project_dir').'/public/uploads/';  // Chemin du dossier de destination

                // Générez un nom unique pour le fichier afin d'éviter les conflits
                $newFilename = uniqid().'.'.$file->guessExtension();

                try {
                    // Déplacez le fichier dans le dossier de destination
                    $file->move($destination, $newFilename);
                    $reclamation->setFichierPJRec($newFilename);  // Sauvegardez le nom du fichier dans l'entité
                } catch (FileException $e) {
                    // Gérer l'exception si le fichier n'a pas pu être déplacé
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier.');
                }
            }

            ////nrcupreirew el les champs 

$titre = $form->get('Titre')->getData();
$emailUser = $form->get('MailClient_Rec')->getData();
$Type = $form->get('Type_Rec')->getData();
$Description = $form->get('Description_Rec')->getData();




///Blaset el EMail :!!!

 $mail = new PHPMailer(true);
 $mail->isSMTP(); // Set mailer to use SMTP
$mail->CharSet = "utf-8"; // set charset to utf8
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, ssl also accepted
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->Port = 587; // TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
 );
 $mail->isHTML(true); // Set email format to HTML
 $mail->Username = 'symfonymailing34@gmail.com '; // SMTP username
 $mail->Password = 'mxnhmmzjlgyvjndc'; // SMTP password
 $mail->setFrom('symfonymailing34@gmail.com', 'Meriem'); //Your application NAME and EMAIL
 $mail->Subject = 'Reclamation Envoyé par :'.$emailUser.''; //Message subject
 $mail->Body = '
     <div style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
        <div style="max-width: 600px; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #007bff; text-align: center;">Nouvelle Réclamation</h2>
           <p>Bonjour Monsieur/Madame,</p>

            <p>Nous avons bien reçu votre réclamation avec les détails suivants :</p>

           <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                <tr>
                   <td style="background-color: #007bff; color: #ffffff; padding: 10px; font-weight: bold;">Titre</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . htmlspecialchars($titre) . '</td>
                 </tr>
                 <tr>
                     <td style="background-color: #007bff; color: #ffffff; padding: 10px; font-weight: bold;">Type</td>
                   <td style="padding: 10px; border: 1px solid #ddd;">' . htmlspecialchars($Type) . '</td>
               </tr>
                <tr>
                    <td style="background-color: #007bff; color: #ffffff; padding: 10px; font-weight: bold;">Description</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . nl2br(htmlspecialchars($Description)) . '</td>
            </tr>
         </table>
          <p style="margin-top: 20px;">Veuillez Traiter la réclamation dans les plus brefs délais.</p>

          <p>Merci pour votre confiance.</p>

         <div style="text-align: center; margin-top: 20px;">
              <a href="https://votre-site.com" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">Visitez notre site</a>
          </div>

            <p style="margin-top: 20px; font-size: 12px; color: #888; text-align: center;">
                Ceci est un e-mail automatique, merci de ne pas répondre.
             </p>
        </div>
     </div>';


 $mail->addAddress('mariem.marzouk272003@gmail.com', 'Administration'); // Target email
$mail->send();




////houni youfa el email !!!!

/////////////////////////////////////////
            $entityManager->persist($reclamation);
            $entityManager->flush();
             // Redirigez ou affichez un message de succès
            $this->addFlash('success', 'Réclamation ajoutée avec succès');
            return $this->redirectToRoute('app_reclamations');
        }
 
        return $this->render('reclamation/addRecClient.html.twig', [
             'form' => $form,  // Passez le formulaire à la vue
         ]);      
    }

    #[Route('/supprimerRec/{id}', name: 'app_supprimer_reclamation')]
    public function supprimerReclamation($id,EntityManagerInterface $entityManager,ReclamationRepository $recRepo): Response
    {
        $reclamation = $recRepo->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }
        //          Supprimer la réclamation
        //$entityManager = $entityManager;
        $entityManager->remove($reclamation);
        $entityManager->flush();
        return $this->redirectToRoute('app_reclamations');
    }


    #[Route('/modifierRec/{id}', name: 'app_modifier_reclamation')]
    public function modifierReclamation(Request $request, $id,EntityManagerInterface $entityManager,ReclamationRepository $recRepo): Response
    {
        $reclamation = $recRepo->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }

            // Créez le formulaire de modification
            $form = $this->createForm(ModifierRecType::class, $reclamation);

            // Traitez la requête du formulaire
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
               
                $file = $form->get('file')->getData();
            if ($file) {
                // Déplace le fichier dans un dossier spécifique
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads/';  // Chemin du dossier de destination
                // Générez un nom unique pour le fichier afin d'éviter les conflits
                $newFilename = uniqid().'.'.$file->guessExtension();
                try {
                    // Déplacez le fichier dans le dossier de destination
                    $file->move($destination, $newFilename);
                    $reclamation->setFichierPJRec($newFilename);  // Sauvegardez le nom du fichier dans l'entité
                } catch (FileException $e) {
                    // Gérer l'exception si le fichier n'a pas pu être déplacé
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier.');
                }
            }
            // Enregistrez les modifications
            $entityManager->persist($reclamation);
            $entityManager->flush();
            return $this->redirectToRoute('app_reclamations');  // Redirection vers la liste des réclamations
        }
        return $this->render('reclamation/modifierRec.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/creerSuivie', name: 'app_add_suivi')]
    public function AddSuivi(Request $request,EntityManagerInterface $entityManager): Response
    {
         // Crée une nouvelle instance de l'entité Reclamation
         $suivi = new Suivi();
         // Crée le formulaire avec l'entité Reclamation
         $form = $this->createForm(SuiviType::class, $suivi);
         // Traite la requête du formulaire (si POST)
         $form->handleRequest($request);
         if ($form->isSubmitted()) {
            //$reclamation->setStatusRec('Ouvert');  // Date actuell
            $suivi->setStatisfaction('non');
            $entityManager->persist($suivi);
            $entityManager->flush();
           // Redirigez ou affichez un message de succès
           $this->addFlash('success', 'suivi ajoutée avec succès');
           return $this->redirectToRoute('app_suivis_admin');
         }  
        return $this->render('reclamation/addSuivi.html.twig', [
            'form' => $form,  // Passez le formulaire à la vue
        ]);
    }

    
    #[Route('/voirSuivi/{id}', name: 'app_voir_suivi')]
    public function voirSuivi(Reclamation $reclamation,EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les suivis associés à la réclamation
        $suivis = $reclamation->getListeSuivisRec();
        //   // Vérifier si tous les suivis sont satisfaits
        //   $tousSatisfaits = true;
        //   foreach ($suivis as $suivi) {
        //       if ($suivi->getStatisfaction() == 'non') {
        //           $tousSatisfaits = false;
        //           break;
        //       }
        //   }

        //   // Si tous les suivis sont satisfaits, changer le statut de la réclamation à "Fermé"
        //   if ($tousSatisfaits) {
        //       $reclamation->setStatusRec('Fermé');
        //       $entityManager->flush();  // Sauvegarder les modifications
        //   }
        return $this->render('reclamation/voir_suivi.html.twig', [
            'reclamation' => $reclamation,
            'suivis' => $suivis,
        ]);
    }

      // Route pour modifier la satisfaction d'un suivi
    #[Route('/modifierSuivi/{id}', name: 'app_modifier_suivi')]
      public function modifierSuivi($id, Request $request, EntityManagerInterface $entityManager, SuiviRepository $suiviRepo): Response
    {
        // Récupérer le suivi
        $suivi = $suiviRepo->find($id);
        if (!$suivi) {
            throw $this->createNotFoundException('Le suivi n\'existe pas');
        }
        // Créer et gérer le formulaire pour modifier Satisfaction
        $form = $this->createForm(ModifierSuiviType::class, $suivi);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour la satisfaction du suivi
            $satisfaction = $suivi->getStatisfaction();
            // Vérifier la satisfaction et mettre à jour le statut de la réclamation
            if ($satisfaction === 'oui' || $satisfaction === 'ignored') {
                // Si satisfaction est 'oui' ou 'ignored', on ferme la réclamation
                $reclamation = $suivi->getReclamation();
                $reclamation->setDateResolutionRec(new \DateTime());
                $reclamation->setStatusRec('Fermé');
                $entityManager->persist($reclamation);
            } elseif ($satisfaction === 'non') {
                // Si satisfaction est 'non', laisser la réclamation ouverte pour de nouveaux suivis
                $reclamation = $suivi->getReclamation();
                $reclamation->setStatusRec('Ouvert');
                $entityManager->persist($reclamation);
            }
            // Enregistrer les modifications
            $entityManager->persist($suivi);
            $entityManager->flush();
            // Ajouter un message flash
            $this->addFlash('success', 'Satisfaction mise à jour avec succès.');
            // Rediriger vers la vue de la réclamation
            return $this->redirectToRoute('app_reclamations', ['id' => $suivi->getReclamation()->getId()]);
        }

        return $this->render('reclamation/modifier_suivi.html.twig', [
            'form' => $form->createView(),]);
    }




    #[Route('/AdminDash', name: 'app_admin_recs')]
    public function adminDash(ReclamationRepository $reclamationRepo, SuiviRepository $suiviRepo): Response
    {
        
        // Ecrirr des requets DQL pour faire les stasititiques sur suivis + Reclamations
        $totalReclamations = $reclamationRepo->count([]);
        $totalSuivis = $suiviRepo->count([]);
        $tauxSatisfaction = $suiviRepo->getTauxSatisfaction();
        $reclamationsNonTraitees = $reclamationRepo->count(['Status_Rec' => 'Ouvert']);
        $reclamationsParDate = $reclamationRepo->countReclamationsByDate();
        //Nombre de Reclamations Par Type  Pie Chart
            $data = $reclamationRepo->countReclamationsByType();  
            // Transformer les données en JSON pour Chart.js
            $labels = [];
            $counts = [];
            foreach ($data as $item) {
                $labels[] = $item['type']; // Service, Finance, Autres
                $counts[] = $item['count'];
            }
        //Statisfaction par type de reclamation   
            $dataSatis = $suiviRepo->getSatisfactionByType();
            $stats = [];
            foreach ($dataSatis as $item) {
                $type = $item['type'];
                $total = $item['total_suivis'] ?: 1; // Évite la division par zéro
                $satisfaits = $item['satisfaits'] ?: 0;
                $pourcentage = round(($satisfaits / $total) * 100, 2);
                $stats[] = ['type' => $type,'pourcentage' => $pourcentage];
            }
  
        return $this->render('reclamation/SatistiquesAdmin.html.twig', [
            'totalReclamations' => $totalReclamations,
            'totalSuivis' => $totalSuivis,
            'tauxSatisfaction' => $tauxSatisfaction,
            'reclamationsNonTraitees' => $reclamationsNonTraitees,
            'reclamationsParDate'=>$reclamationsParDate,
            'labels' => json_encode($labels),
            'counts' => json_encode($counts),
            'stats' => $stats]);
    }

    // Action pour afficher la liste des réclamations
 #[Route('/AfficherSuivis', name: 'app_suivis_admin')]
 public function showSuivisAdin(SuiviRepository $suiviRepo): Response
 {
     // Récupérer toutes les réclamations depuis la base de données

 $suivis = $suiviRepo->findAll();
     // Passer les réclamations à la vue
     return $this->render('reclamation/showSuivisAdmin.html.twig', [
         'suivis' => $suivis,
     ]);
 }
// Supprimer un suivi
#[Route('/supprimerSuiviAdmin/{id}', name: 'app_supprimer_suivi_admin')]
public function deleteSuivi(Suivi $suivi, EntityManagerInterface $em): Response
{
    $em->remove($suivi);
    $em->flush();
    
    $this->addFlash('danger', 'Suivi supprimé avec succès.');
    return $this->redirectToRoute('app_reclamations_admin');
}

#[Route('/modifierSuiviAdmin/{id}', name: 'app_modifier_suivi_admin')]
public function editSuivi(Request $request, Suivi $suivi, EntityManagerInterface $em): Response
{
    // Create the form for editing the 'suivi'
    $form = $this->createForm(EditSuiviAdminType::class, $suivi);
    $form->handleRequest($request);

    // Check if the form is submitted and valid
    if ($form->isSubmitted() && $form->isValid()) {
        // Set the current date for the follow-up
        $suivi->setDateSuivi(new \DateTime());

        // Persist the changes in the database
        $em->flush();

        // Add a flash message to notify the user of the success
        $this->addFlash('success', 'Suivi modifié avec succès.');

        // Redirect to the 'voirSuiviAdmin' page for the associated 'reclamation'
        return $this->redirectToRoute('app_voir_suivi_admin', [
            'id' => $suivi->getReclamation()->getId(), // Redirect to the reclamation page
        ]);
    }

    // Render the form to edit the 'suivi'
    return $this->render('reclamation/editSuiviAdmin.html.twig', [
        'form' => $form->createView(),
    ]);
}


 // Action pour afficher la liste des réclamations
 #[Route('/reclamationsAdmin', name: 'app_reclamations_admin')]
 public function showReclamationsAdmin(ReclamationRepository $recRepo): Response
 {
     // Récupérer toutes les réclamations depuis la base de données

    $reclamations = $recRepo->findAll();
    
     // Passer les réclamations à la vue
     return $this->render('reclamation/showReclamationsAdmin.html.twig', [
         'reclamations' => $reclamations,
     ]);
 }

  // Action pour générer le PDF à partir de l'API PDFShift
  #[Route('/generate-pdf-report', name: 'app_generate_pdf_report')]
  public function generatePdfReport(ReclamationRepository $recRepo): Response
  {
      // Récupérer toutes les réclamations depuis la base de données
      $reclamations = $recRepo->findAll();
      
      // Convertir les données en HTML (le tableau des réclamations)
      $htmlContent = $this->renderView('reclamation/pdf_report.html.twig', [
          'reclamations' => $reclamations,
      ]);

      // Initialisation de la session cURL
      $curl = curl_init();

      // Configuration des options cURL pour appeler l'API PDFShift
      curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST => true,
          CURLOPT_POSTFIELDS => json_encode(array(
              "source" => $htmlContent, // Passer le contenu HTML ici
              "landscape" => false,
              "use_print" => false
          )),
          CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
          CURLOPT_USERPWD => 'api:sk_2122d97efdfd03a56a02804d2c779db8fe9c5746', // Remplacez par votre clé API
          CURLOPT_SSL_VERIFYPEER => false, // Ignorer les erreurs de vérification du certificat SSL
          CURLOPT_SSL_VERIFYHOST => false // Ignorer la vérification de l'host dans le certificat SSL
      ));

      // Exécution de l'appel API et récupération de la réponse (le fichier PDF généré)
      $response = curl_exec($curl);

      // Si une erreur cURL se produit
      if($response === false) {
          return new Response("Erreur cURL: " . curl_error($curl));
      } else {
          // Sauvegarder le PDF généré dans un fichier
          $pdfPath = 'generated_pdf.pdf';
          file_put_contents($pdfPath, $response);

          // Fermer la session cURL
          curl_close($curl);

          // Retourner le PDF pour téléchargement
          return $this->file($pdfPath, 'generated_pdf.pdf');
      }
  }


 #[Route('/voirSuiviAdmin/{id}', name: 'app_voir_suivi_admin')]
 public function voirSuiviAdmin(Reclamation $reclamation,EntityManagerInterface $entityManager): Response
 {
     // Récupérer tous les suivis associés à la réclamation
     $suivis = $reclamation->getListeSuivisRec();
     //   // Vérifier si tous les suivis sont satisfaits
     //   $tousSatisfaits = true;
     //   foreach ($suivis as $suivi) {
     //       if ($suivi->getStatisfaction() == 'non') {
     //           $tousSatisfaits = false;
     //           break;
     //       }
     //   }

     //   // Si tous les suivis sont satisfaits, changer le statut de la réclamation à "Fermé"
     //   if ($tousSatisfaits) {
     //       $reclamation->setStatusRec('Fermé');
     //       $entityManager->flush();  // Sauvegarder les modifications
     //   }
     return $this->render('reclamation/showSuivisAdmin.html.twig', [
         'reclamation' => $reclamation,
         'suivis' => $suivis,
     ]);
 }


 #[Route('/ajouterSuiviRecAdmin/{id}', name: 'app_ajouter_suivi_reclamation_admin')]
public function ajouterSuivi(Reclamation $reclamation, Request $request, EntityManagerInterface $entityManager): Response
{
    // Crée une nouvelle instance de l'entité Suivi
    $suivi = new Suivi();
    
    // Associer le suivi à la réclamation
    $suivi->setReclamation($reclamation);

    // Crée le formulaire avec l'entité Suivi
    $form = $this->createForm(SuiviType::class, $suivi);
    
    // Traite la requête du formulaire (si POST)
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $suivi->setStatisfaction('ignored'); // Définir la satisfaction à "non" par défaut
        $suivi->setDateSuivi(new \DateTime());  // Date actuell



        /////Blaset el SMS 
          // Remplace ces informations par les tiennes
   /////Blaset el SMS 
          // Remplace ces informations par les tiennes
          // el sid el jdid : SK66607b55fe5b32108ed5ff8e691e9ed4
          // el secret el jdid :tbB0ep12PVCzvCSjyxRxbycP3hIDuh8c

          //recovery code :FGKV9KXHU97DUFJGKZFA14N9
        //   $sid = "AC25d8728e2c2520acc1490eaf47517526";
        //   $token = "aa49e1fa786e189b76100e4a5c4c7080"; // Remplace avec ton Auth Token
        //   $messagingServiceSid = "MGe2453a42aea153d79d0de415f4d21334"; // Ton Service SID Twilio
        //   $recipientNumber = "+21655301974"; // Numéro de destination (format international)
        //   $twilio = new Client($sid, $token);
        //       $message = $twilio->messages->create(
        //           $recipientNumber,
        //           [
        //             "from" => "+18573492537",
        //               "messagingServiceSid" => $messagingServiceSid,
        //               "body" => '📢 [Notification - Réclamation] 📢' . PHP_EOL . 
        //                         '--------------------------------------' . PHP_EOL .
        //                         '📌 Type Réclamation: ' . $reclamation->getTypeRec() . PHP_EOL .
        //                         '📌 Titre Réclamation : ' . $reclamation->getTitre() . PHP_EOL .
        //                         '📌 Description Du Suivie : ' . $suivi->getDescriptionSuivi() . PHP_EOL .
        //                         '✅ Un suivi a été ajouté à votre réclamation.' . PHP_EOL .
        //                         '📞 Contactez-nous si besoin.' . PHP_EOL .
        //                         '🤝 Merci pour votre confiance !' . PHP_EOL .
        //                         '--------------------------------------'
        //           ]
        //       );
        // /////////////////////////////////////
        // $sid ="ACe3b6d202d90e32b3224b005cf860cb9b";
        // $token ="99abb1304478c672064895387be39622";
        
        // // Configurer CurlClient pour désactiver la vérification SSL
        // $httpClient = new CurlClient([
        //     CURLOPT_SSL_VERIFYPEER => false,
        //     CURLOPT_SSL_VERIFYHOST => false
        // ]);
        
        // // Passer "null" pour la région avant de fournir $httpClient
        // $twilio = new Client($sid, $token, null, null, $httpClient);
        // // $twilio = new Client($sid, $token);

        // $message = $twilio->messages->create(
        //     "+21655301974", // Numéro de destination
        //     [
        //          "from" => "+17177947488", // Ton numéro Twilio
        //          "messagingServiceSid" => "MGba7ee927f2fd2ac6c6db5614d7ba31f5", // Ton Messaging Service SID

        //         "body" => '📢 [Notification - Réclamation] 📢' . PHP_EOL . 
        //                         '--------------------------------------' . PHP_EOL .
        //                         '📌 Type Réclamation: ' . $reclamation->getTypeRec() . PHP_EOL .
        //                         '📌 Titre Réclamation : ' . $reclamation->getTitre() . PHP_EOL .
        //                         '📌 Description Du Suivie : ' . $suivi->getDescriptionSuivi() . PHP_EOL .
        //                         '✅ Un suivi a été ajouté à votre réclamation.' . PHP_EOL .
        //                         '📞 Contactez-nous si besoin.' . PHP_EOL .
        //                         '🤝 Merci pour votre confiance !' . PHP_EOL .
        //                         '--------------------------------------'
        //     ]
        // );
        
        // echo "Message envoyé avec succès !";
    // ✅ Ajouter un flash message de succès
    // $this->addFlash('success', '📩 SMS envoyé avec succès !');
        //////
        $entityManager->persist($suivi);
        $entityManager->flush();

        // Afficher un message de succès
        $this->addFlash('success', 'Suivi ajouté avec succès');

        // Rediriger vers la page des suivis ou une autre page
        return $this->redirectToRoute('app_voir_suivi_admin', ['id' => $reclamation->getId()]);
    }

    // Rendu du formulaire
    return $this->render('reclamation/addSuivi.html.twig', [
        'form' => $form->createView(),
        'reclamation' => $reclamation,
    ]);


    
}

   

  // Action pour afficher la liste des réclamations
  #[Route('/ChatbotRec2', name: 'app_chatbot_rec2')]
  public function chatbotRec2(Request $request): Response
  {
     $userMessage = ''; // Initialiser la variable du message de l'utilisateur
    $chatbotResponse = ''; // Initialiser la variable de la réponse du chatbot

    // Vérifier si un message a été soumis via le formulaire
    if ($request->isMethod('POST')) {
        $userMessage = $request->request->get('userMessage'); // Récupérer le message de l'utilisateur

        $client = HttpClient::createForBaseUri('https://openrouter.ai', [
            'verify_peer' => false,
            'verify_host' => false,
        ]);

        // Définir les données à envoyer dans la requête
        $data = [
            'model' => 'cognitivecomputations/dolphin3.0-mistral-24b:free',
            'messages' => [
                ['role' => 'system', 'content' => 'Vous Etes Un Assistant des reclamations dans le domaine artistique , veuillez repondre a tous les questions des utilisateurs , si un utilisateur vous questionne sur votre identité en tant que model par exmple : vous etes dolphin3 ...? ne repond pas !! et dit desole je ne peux pas repondre'],
                ['role' => 'user', 'content' => $userMessage] // Message de l'utilisateur
            ],
        ];

        // Effectuer la requête POST avec les données JSON et l'en-tête Authorization
        $response = $client->request('POST', '/api/v1/chat/completions', [
            'json' => $data,
            'headers' => [
                'Authorization' => 'Bearer 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',  // Remplace par ta clé API réelle
            ]
        ]);

        // Convertir la réponse JSON en tableau
        $apiResponse = $response->toArray();

        // Récupérer la réponse du chatbot
        $choices = $apiResponse['choices'];
        $chatbotResponse = $choices[0]['message']['content']; // La réponse générée
    }

    // Passer la réponse du chatbot à la vue
    return $this->render('reclamation/ChatbotAI.html.twig', [
        'chatbotResponse' => $chatbotResponse, // La réponse du chatbot à afficher
    ]);
  }

  //smsmariem@gmail.com_yYhS19iwh3GsxZY1dvSKFExgy72Uzdb8LpWrxYEZP0xujPMnzAi2rvZyIGtywOL3

//   #[Route('/call-api', name: 'call_api')]
//   public function callApi(): Response
//   {
//    // Initialisation de la session cURL
// $curl = curl_init();

// // Contenu HTML à convertir
// $htmlContent = "<html><body><h1>Test PDF avec PDFShift</h1><p>Ceci est un fichier HTML converti en PDF.</p></body></html>";

// // Configuration des options cURL pour appeler l'API PDFShift
// curl_setopt_array($curl, array(
//     CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST => true,
//     CURLOPT_POSTFIELDS => json_encode(array(
//         "source" => $htmlContent, // Vous pouvez soit passer un fichier HTML ou une URL ici
//         "landscape" => false,
//         "use_print" => false
//     )),
//     CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
//     CURLOPT_USERPWD => 'api:sk_2122d97efdfd03a56a02804d2c779db8fe9c5746', // Remplacez par votre clé API
//     CURLOPT_SSL_VERIFYPEER => false, // Ignorer les erreurs de vérification du certificat SSL
//     CURLOPT_SSL_VERIFYHOST => false // Ignorer la vérification de l'host dans le certificat SSL
// ));

// // Exécution de l'appel API et récupération de la réponse (le fichier PDF généré)
// $response = curl_exec($curl);

// // Si une erreur cURL se produit
// if($response === false) {
//     echo "Erreur cURL: " . curl_error($curl);
// } else {
//     // Sauvegarder le PDF généré dans un fichier
//     file_put_contents('generated_pdf.pdf', $response);

//     // Optionnel: Rediriger l'utilisateur vers le fichier PDF pour téléchargement
//     header('Content-Type: application/pdf');
//     header('Content-Disposition: attachment; filename="generated_pdf.pdf"');
//     echo $response;
// }

// // Fermer la session cURL
// curl_close($curl);
//  // Passer la réponse du chatbot à la vue
//  return $this->render('baseAdmin.html.twig', [
// ]);
//   }
  
     
  
}
