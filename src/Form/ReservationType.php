<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        // Sélection de l'événement (désactivée pour l'utilisateur)
        ->add('event', EntityType::class, [
            'class' => Event::class,
            'choice_label' => 'title', // Affiche le titre de l'événement dans la liste déroulante
            'label' => 'Événement',
            'placeholder' => 'Sélectionnez un événement',
            'required' => true,
            'disabled' => true, // L'utilisateur ne peut pas modifier l'événement
        ])
        ->add('quantity', IntegerType::class, [
            'label' => 'Nombre de tickets',
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Positive(),
                new Assert\LessThanOrEqual([
                    'value' => $options['availableTickets'],
                    'message' => 'La quantité de tickets ne peut pas dépasser le nombre de tickets disponibles.',
                ]),
            ],
        ]);
    }
public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => Reservation::class,
        'availableTickets' => 0, // valeur par défaut pour éviter un bug si l'option n'est pas passée
    ]);
}
}