<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Structure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, ['label'=>'Email','attr'=>['placeholder'=>'email','class'=>'form-control']])
            ->add('password', RepeatedType::class,
            [
                'type'=>PasswordType::class,
                'required'=>true,
                'invalid_message'=>'Les mots de passe ne correspondent pas',    
                'first_options'=> ['label'=> 'Mot de passe'], 
                'second_options'=> ['label'=> 'Confirmez votre mot de passe'] ,
                'attr'=>['placeholder'=>'mot de passe','class'=>'form-control']
            ]
            )
            ->add('inscription', SubmitType::class, ['attr'=>['class'=>'btn btn-primary']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
