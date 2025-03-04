<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
class AdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('firstName', TextType::class, [
            'label' => 'Prénom',
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Le prénom est requis.']),
                new Length(['max' => 50, 'maxMessage' => 'Le prénom ne peut pas dépasser 50 caractères.']),
            ],
            'attr' => ['class' => 'form-control']
        ])
        ->add('lastName', TextType::class, [
            'label' => 'Nom',
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Le nom est requis.']),
                new Length(['max' => 50, 'maxMessage' => 'Le nom ne peut pas dépasser 50 caractères.']),
            ],
            'attr' => ['class' => 'form-control']
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'L\'email est requis.']),
            ],
            'attr' => ['class' => 'form-control']
        ])
        ->add('plainPassword', PasswordType::class, [
            'mapped' => false, // Not stored directly in the entity
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Le mot de passe est requis.']),
                new Length(['min' => 4, 'minMessage' => 'Le mot de passe doit contenir au moins 4 caractères.']),
            ],
            'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez votre mot de passe']
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Add admin',
            'attr' => ['class' => 'btn btn-danger btn-lg btn-block']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}