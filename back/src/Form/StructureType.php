<?php

namespace App\Form;

use App\Entity\Structure;
use App\Validator\UniqueEmail;
use Symfony\Component\Form\AbstractType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use App\Enum\StructureType as StructureTypeEnum;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class StructureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la structure',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez le nom de la structure',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
                ]
            ])
            ->add('street', TextType::class, [
                'label' => 'Adresse',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez l\'adresse',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
                ]
            ])
            ->add('zip_code', TextType::class, [
                'label' => 'Code postal',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez le code postal',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez la ville',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez le numéro de téléphone',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email de contact',
                'constraints' => [
                    new UniqueEmail(),
                ],
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez l\'email de contact',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
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
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez la description de la structure',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500',
                    'rows' => 4
                ]
            ])
            ->add('structureType', EnumType::class, [
                'label' => 'Type de structure',
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'class' => StructureTypeEnum::class,
                'placeholder' => 'Sélectionnez le type de structure',
                'attr' => [
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
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
                'label' => 'Créer la structure',
                'attr' => [
                    'class' => 'w-full mt-4 bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Structure::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'structure_form',  // Un ID unique pour ce formulaire
        ]);
    }
}
