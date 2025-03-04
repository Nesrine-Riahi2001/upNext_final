<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;#importe le type de champ FileType=permet d'ajouter un champ d'upload de fichier dans le formulaire.
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Titre de l'événement
            ->add('title', TextType::class, [
                'label' => 'Titre de l\'événement',
                'required' => true,  // Le champ description peut être facultatif
            ])

            // Description de l'événement
            ->add('descrip', TextareaType::class, [
                'label' => 'Description de l\'événement',
                'required' => false,  // Le champ description peut être facultatif
            ])

            // Date de début de l'événement
            ->add('startdate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'required' => false,  // La date de début peut être facultative
            ])

            // Date de fin de l'événement
            ->add('enddate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'required' => false,  // La date de fin peut être facultative
            ])

            // Nombre de billets disponibles
            ->add('ticketCount', NumberType::class, [
                'label' => 'Nombre de billets disponibles',
                'required' => false,
            ])

            // Prix du billet
            ->add('ticketPrice', NumberType::class, [
                'label' => 'Prix du billet',
                'required' => false,
                'scale' => 2,  // Utilisation de 2 décimales
                'attr' => ['step' => '0.01'],  // Précision pour les valeurs décimales
            ])

            // Localisation de l'événement (champ texte)
            ->add('location', TextType::class, [
                'label' => 'Lieu de l\'événement',
                'required' => false,  // Le champ de localisation peut être facultatif
            ])

            // Image de l'événement
            ->add('image', FileType::class, [
                'label' => 'Image de l\'événement (JPG, PNG)',
                'mapped' => false,  
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,  // Lie le formulaire à l'entité Event
        ]);
    }
}
