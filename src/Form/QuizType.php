<?php

// src/Form/QuizType.php
namespace App\Form;

use App\Entity\Quiz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreQuiz', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter quiz titre'],
                'empty_data' => '', // <-- Add this line
            ])
            ->add('sujet', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter quiz sujet'],
                'empty_data' => '', // <-- Add this line - THIS IS THE KEY FIX
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }
}