<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Suivi;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditSuiviAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Description_Suivi')
            // ->add('Date_Suivi', null, [
            //     'widget' => 'single_text',
            // ])
            // ->add('Statisfaction')
            // ->add('reclamation', EntityType::class, [
            //     'class' => Reclamation::class,
            //     'choice_label' => 'id',
            // ])
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
