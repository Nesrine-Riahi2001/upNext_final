<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ModifierRecType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre')
            ->add('MailClient_Rec')
            // ->add('Date_Creation_Rec', null, [
            //     'widget' => 'single_text',
            // ])
            ->add('Type_Rec', ChoiceType::class, [
                'label' => 'Type de réclamation',
                'choices' => [
                    'Service' => 'service',
                    'Finance' => 'Finance',
                    'Autres' => 'autres',
                ],
                'placeholder' => 'Choisir un type', // Optionnel : pour afficher un placeholder
            ])
            ->add('Description_Rec')
            ->add('file', FileType::class, [
                'label' => 'Joindre un fichier (PDF, Image, Vidéo, etc.)',
                'mapped' => false,  // Ce champ n'est pas mappé à la base de données
                'required' => false,  // Le fichier est facultatif
                'attr' => [
                    'accept' => 'image/*, .pdf, .mp4, .mp3, .txt', // Types de fichiers acceptés
                ],
            ])

            ->add('modifier_Rec',SubmitType::class)
            // ->add('Status_Rec')
            // ->add('Date_Resolution_Rec', null, [
            //     'widget' => 'single_text',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
