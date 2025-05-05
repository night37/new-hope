<?php

namespace App\Service;

use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use phpDocumentor\Reflection\Types\Boolean;

class EasyPhpFieldService
{
   public static function EmailField(string $fieldName, string $fieldLabel,  $data = null): TextField
  {
    $emailField = TextField::new($fieldName, $fieldLabel);
    if ($data) {
      $emailField->setFormTypeOptions([
        'data' => $data,
      ]);
    }
    return $emailField->setFormTypeOption('attr', [
      'type' => 'email',
      'autocomplete' => 'off',
    ]);
  }

   public static function IntegerField(string $fieldName, string $fieldLabel): IntegerField
  {
    return IntegerField::new($fieldName, $fieldLabel);
  }

   public static function TextField(string $fieldName, string $fieldLabel, $isDisabled=false,  $data = null,): TextField
  {
    $textField = TextField::new($fieldName, $fieldLabel);
    $textField->setDisabled($isDisabled);

    if ($data) {
      $textField->setFormTypeOptions([
        'data' => $data,
        
      ]);
    }

    return $textField;
  }


   public static function ChoiceField(string $type, string $fieldName, string $fieldLabel, bool $multiple = false, $data = null): ChoiceField
  {
    $enumClass = 'App\\Enum\\' . ucfirst($type);
    $choiceField = ChoiceField::new($fieldName, $fieldLabel)
      ->setChoices(
        array_combine(
          array_map(fn($case) => ucfirst($case->value), $enumClass::cases()), // Labels affichés
          array_map(fn($case) => $case, $enumClass::cases())
        )
      )->renderExpanded(false);
    if ($multiple) {
      $choiceField->allowMultipleChoices();
    };
    if ($data) {
      $choiceField->setFormTypeOptions([
        'data' => $data,
      ]);
    }
    return $choiceField;
  }
   public static function BooleanField(string $fieldName, string $fieldLabel,  $data = null): BooleanField
  {
    $booleanField = BooleanField::new($fieldName, $fieldLabel);
    if ($data) {
      $booleanField->setFormTypeOptions([
        'data' => $data,
      ]);
      $booleanField->hideOnIndex(); 
    }
    return $booleanField;
  } 

   public static function ImagePreview(string $fileName)
  {

    $imagePreview = Field::new($fileName);
    $imagePreview->setFormType(VichImageType::class);
    $imagePreview->setLabel('Télécharger une nouvelle image');


    return $imagePreview;
  }

   public static function ImageField(string $fieldName, string $fieldLabel, string $uploadDir, string $basePath, bool $required, bool $multiple = false): ImageField
  {

    $imageField = ImageField::new($fieldName, $fieldLabel);
    $imageField->setUploadDir($uploadDir);
    $imageField->setBasePath($basePath);
    $imageField->setUploadedFileNamePattern('[randomhash].[extension]');
    $imageField->setRequired($required);

    $imageField->setFormTypeOptions([
      "attr" => [
        "accept" => "image/x-png,image/jpeg,image/jpg,image/png,image/webp"
      ],
      "multiple" => $multiple,
    ]);




    return $imageField;
  }

   public static function TextEditorField(string $fieldName, string $fieldLabel,  $data = null): TextEditorField
  {
    return TextEditorField::new($fieldName, $fieldLabel);
  }

  public static function PasswordField(): TextField
  {
    $passwordField = TextField::new('password', 'Mot de passe');

    $passwordField->setFormType(RepeatedType::class);
    $passwordField->setRequired(false);
    $passwordField->setFormTypeOptions([
      'type' => PasswordType::class,
      'first_options' => [
        'label' => 'Nouveau mot de passe',
        'empty_data' => '',
        'row_attr' => [
          'class' => 'col-md-6 col-xxl-5',
          'style' => 'padding-right: 12px;' 
        ],
      ],
      'second_options' => [
        'label' => 'Confirmation du mot de passe',
        'empty_data' => '',
        'row_attr' => [
                 'class' => 'col-md-6 col-xxl-5',
                 'style' => 'padding-right: 12px;'
          ],
        ],
      'invalid_message' => 'Les mots de passe ne correspondent pas',
      
    ]);
    
    return $passwordField;
  }
  public static function DateField(string $label) {

    $dateField = DateTimeField::new($label);
 
    return $dateField;
   
    
  }
  public static function TelephoneField(string $phoneNumber): TelephoneField
  {
    $phoneNumberField = TelephoneField::new($phoneNumber);
    $phoneNumberField->setLabel('Téléphone');
    
    return $phoneNumberField;
  }

  public static function AssociationField(string $fieldName, string $fieldLabel, Bool $disabled = false): AssociationField
  {
    return AssociationField::new($fieldName, $fieldLabel)
      ->setRequired(false)

      ->autocomplete()
      ->setFormTypeOption('attr', [
        'class' => 'form-control',
        'placeholder' => 'Sélectionner une option',
        'disabled' => $disabled,
      ])
      ->addCssClass( $disabled ? 'remove-delete-btn' : '');
  }

}
