<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\File;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => '',
                    'maxlength' => 255, // Client-side validation for length
                    'required' => true, // Ensures HTML5 validation enforces this field
                ],
            ])
            ->add('author', TextType::class, [
                'attr' => [
                    'placeholder' => '',
                    'maxlength' => 255, // Client-side validation for length
                    'required' => true, // Ensures the field is required in HTML5
                ],
            ])
            ->add('pages', IntegerType::class, [
                'attr' => [
                    'placeholder' => '',
                    'min' => 1,  // Client-side only
                    'max' => 10000,
                    'step' => 1,  // Prevents decimals
                    'oninput' => "if(this.value < 1) this.value='';" // Clears negatives dynamically
                ],
                'required' => false, // Allows users to leave it blank
            ])
            ->add('summary', TextareaType::class, [
                'attr' => [
                    'placeholder' => '.',
                    'maxlength' => 7000, // Client-side limit to prevent very long text
                    'rows' => 4, // Makes the input area more readable
                    'required' => false, // Ensures users can leave it blank
                ],
            ])
            ->add('genre', TextType::class, [
                'attr' => [
                    'placeholder' => '',
                    'maxlength' => 128, // Client-side validation for length
                    'required' => true, // Ensures this field is required in HTML5
                ],
            ])
            ->add('imageFile', FileType::class, [
                'mapped' => false, // This field is not mapped directly to the entity
                'required' => false,
                'attr' => [
                    'accept' => 'image/jpeg, image/png', // Client-side validation for file type
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M', // Limit file size
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image.',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
