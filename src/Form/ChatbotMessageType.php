<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class ChatbotMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('userMessage', TextType::class, [
            'label' => false,
            'attr' => [
                'placeholder' => 'Votre message',
                'class' => 'chatbot-input',
            ],
        ])
        ->add('send', SubmitType::class, [
            'label' => 'Envoyer',
            'attr' => ['class' => 'chatbot-send-btn'],
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
