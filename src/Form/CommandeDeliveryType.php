<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CommandeDeliveryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('delivery_date', DateType::class, [
                'label' => 'Date de livraison : ',
                'widget' => 'single_text',
                'html5' => true,
                'format' => 'yyyy-MM-dd',
                'constraints' => [
                    new Assert\NotBlank(message: 'La date de livraison est requise.'),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de livraison doit être supérieure ou égale à aujourd\'hui.'
                    ]),
                    new Assert\Callback(function ($value, $context) use ($options) {
                        $commande = $options['data'];
                        if ($commande && $commande->getDateCommande() && $value <= $commande->getDateCommande()) {
                            $context->buildViolation('La date de livraison doit être supérieure à la date de commande.')
                                ->atPath('delivery_date')
                                ->addViolation();
                        }
                    })
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}