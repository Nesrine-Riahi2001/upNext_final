<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prix_total', NumberType::class, [
                'label' => 'Le prix total : ',
                'scale' => 2,
                'invalid_message' => 'Veuillez entrer un prix valide.',
            ])
            ->add('date_commande', DateType::class, [
                'label' => 'La date de commande : ',
                'widget' => 'single_text',
                'html5' => true,
                'format' => 'yyyy-MM-dd',
                'data' => $options['data'] ? ($options['data']->getDateCommande() ?? new \DateTime()) : new \DateTime(),
                'invalid_message' => 'Veuillez entrer une date valide.',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Le statut : ',
                'choices' => [
                    'En attente' => 'En attente',
                    'En cours' => 'En cours',
                    'Livrée' => 'Livrée',
                    'Annulée' => 'Annulée',
                ],
                'placeholder' => 'Choisir un statut',
                'invalid_message' => 'Le statut sélectionné n\'est pas valide.',
            ])
            ->add('commander', SubmitType::class, [
                'label' => 'Mettre à jour',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}