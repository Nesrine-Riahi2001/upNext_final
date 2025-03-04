<?php


namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
class RegistrationFormType extends AbstractType


{ public function buildForm(FormBuilderInterface $builder, array $options): void
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
            ->add('speciality', ChoiceType::class, [
                'label' => 'Domaine de spécialité',
                'choices' => [
                    '----------' => '---------',
                    'Musique' => 'music',
                    'Peinture' => 'painting',
                    'Photographie' => 'photography',
                    'Danse' => 'dance',
                    'Animation' => 'animation',
                    'Sculpture' => 'sculpture',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir un domaine de spécialité.']),
                ],
                'attr' => ['class' => 'form-select']
            ])

            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Client' => 'ROLE_CLIENT',
                    'Artist' => 'ROLE_ARTIST',
                ],
                'expanded' => false, // Dropdown menu
                'multiple' => false, // Only one role can be selected
                'mapped' => false, // Prevents Symfony from directly setting it to the entity
                'data' => $options['data']->getRoles()[0] ?? null, // Get the first role as default
            ])

            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'constraints' => [
                    new Length(['max' => 1000, 'maxMessage' => 'La description ne peut pas dépasser 1000 caractères.']),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('image', FileType::class, [
                'label' => 'Photo de profil',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG).',
                    ])
                ],
            ])
           

            ->add('save', SubmitType::class, [
                'label' => 'S’inscrire',
                'attr' => ['class' => 'btn btn-danger btn-lg btn-block']
            ]);

          
    }

 public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_token_id' => 'registration_form', // Pour la protection CSRF
        ]);
    }
}