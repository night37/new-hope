<?php

namespace App\Form;

use App\Entity\User;
use App\Validator\UniqueEmail;
use Symfony\Component\Form\AbstractType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'nom',
                    'class' => 'block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                ]
            ])
            ->add('surname', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'prénom',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new UniqueEmail(),
                ],
                'error_bubbling' => false,
                'required' => true,
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'email',
                    'class' => 'block w-full px-3 text-sm py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Votre mot de passe doit faire au moins {{ limit }} caractères',
                        'max' => 4096, // valeur max recommandée par Symfony
                    ]),
                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                        'message' => 'Votre mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial',
                    ]),
                ],
                'first_options' => [
                    'label' => 'Mot de passe',


                    'label_attr' => [
                        'class' => 'block text-sm font-medium text-gray-700'
                    ],
                    'attr' => [
                        'placeholder' => 'mot de passe',
                        'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'label_attr' => [
                        'class' => 'block text-sm font-medium text-gray-700'
                    ],
                    'attr' => [
                        'placeholder' => 'confirmez votre mot de passe',
                        'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                    ]
                ]
            ])

            ->add('captcha', CaptchaType::class, [
                'label' => 'Captcha',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'
                ],
                'session_key' => 'captcha',
                'invalid_message' => 'Captcha incorrect.',
                'bypass_code' => "test",
                'height' => 38,
                'width' => 200,
                'humanity' => 1,
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'label' => 'Créer un compte',
                    'class' => 'w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
