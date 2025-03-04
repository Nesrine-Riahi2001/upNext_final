<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Suivi;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ModifierSuiviType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Statisfaction', ChoiceType::class, [
            'choices' => [
                'Ignoré' => 'ignored',
                'Oui' => 'oui',
                'Non' => 'non',
                
            ],
            'expanded' => true, // Affiche en boutons radio
            'multiple' => false, // Une seule sélection possible
            'label' => 'Êtes-vous satisfait ?', 
            'required' => true, 
            'choice_attr' => [
                'ignored' => ['class' => 'form-check-input', 'id' => 'inlineRadio3'],
                'oui' => ['class' => 'form-check-input', 'id' => 'inlineRadio1'],
                'non' => ['class' => 'form-check-input', 'id' => 'inlineRadio2'],
                
           
             
            ],
        ])
        
        ->add('modifier_Suivi',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Suivi::class,
        ]);
    }
}
