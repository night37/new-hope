<?php

namespace App\Service;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

use Vich\UploaderBundle\Form\Type\VichImageType;



class EasyPhpField
{

  public function IntegerField(string $fieldName, string $fieldLabel): IntegerField
  {
    $integerField = IntegerField::new($fieldName, $fieldLabel);
    return $integerField;
  }

  public function TextField(string $fieldName, string $fieldLabel,  $data = null): TextField
  {
    $textField = TextField::new($fieldName, $fieldLabel);
    if ($data) {
      $textField->setFormTypeOptions([
        'data' => $data,
      ]);
    }
    return $textField;
  }


  public function ChoiceField(string $type, string $fieldName, string $fieldLabel, bool $multiple = false, $data = null): ChoiceField
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
  public function BooleanField(string $fieldName, string $fieldLabel,  $data = null): BooleanField
  {
    $booleanField = BooleanField::new($fieldName, $fieldLabel);
    if ($data) {
      $booleanField->setFormTypeOptions([
        'data' => $data,
      ]);
    }
    return $booleanField;
  }

  public function ImagePreview(string $fileName)
  {

    $imagePreview = Field::new($fileName);
    $imagePreview->setFormType(VichImageType::class);
    $imagePreview->setLabel('Télécharger une nouvelle image');


    return $imagePreview;
  }

  public function ImageField(string $fieldName, string $fieldLabel, string $uploadDir, string $basePath, bool $required, bool $multiple = false): ImageField
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
    ]);

    if ($multiple) {
      $imageField->setFormTypeOptions([
        "multiple" => true,
      ]);
    }

    return $imageField;
  }

  public function TextEditorField(string $fieldName, string $fieldLabel,  $data = null): TextEditorField
  {
    $textEditorField = TextEditorField::new($fieldName, $fieldLabel);
    return $textEditorField;
  }
}
