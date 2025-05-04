<?php

namespace App\Form;

use App\Entity\Structure;
use Symfony\Component\Form\AbstractType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Enum\StructureType as StructureTypeEnum; // Importation explicite de l'enum

class RequestCreateStructureFormType extends AbstractType
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
                'label_attr' => [
                    'class' => 'block text-sm font-medium text-gray-700'
                ],
                'attr' => [
                    'placeholder' => 'Entrez l\'email de contact',
                    'class' => 'block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500'
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
