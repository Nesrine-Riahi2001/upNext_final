<?php

// src/Form/QuestionType.php
namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class QuestionType extends AbstractType
{
    
 
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('texteQuestion', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter question text'],
            ])
            ->add('option1', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter option 1'],
                'empty_data' => '', //  <--- This is the crucial line
            ])
            ->add('option2', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter option 2'],
                'empty_data' => '', //  <--- Add to all TextType fields
            ])
            ->add('option3', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter option 3'],
                'empty_data' => '', //  <--- Add to all TextType fields
            ])
            ->add('option4', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter option 4'],
                'empty_data' => '', //  <--- Add to all TextType fields
            ])
            ->add('reponseCorrecte', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter correct answer'],
                'empty_data' => '', //  <--- Add to all TextType fields
            ]);
    }

 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}