<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RechercheRecType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mots', SearchType::class, [
            'label' => false,
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrez un mot-clé (Titre, Email...)'
            ],
            'required' => false
        ])
        // ->add('TypeRec', ChoiceType::class, [
        //     'label' => false,
        //     'choices' => [
        //         'Tous' => null,
        //         'Réclamation 1' => 'Type1',
        //         'Réclamation 2' => 'Type2',
        //         'Autre' => 'Autre',
        //     ],
        //     'attr' => ['class' => 'form-control'],
        //     'required' => false
        // ])
        // ->add('StatusRec', ChoiceType::class, [
        //     'label' => false,
        //     'choices' => [
        //         'Tous' => null,
        //         'En cours' => 'En cours',
        //         'Fermé' => 'Fermé',
        //         'En attente' => 'En attente',
        //     ],
        //     'attr' => ['class' => 'form-control'],
        //     'required' => false
        // ])
        ->add('Rechercher', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-primary',
            ]
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // 'data_class' => Reclamation::class,
        ]);
    }
}
