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
                'attr' => ['placeholder' => ''],
            ])
            ->add('author', TextType::class, [
                'attr' => ['placeholder' => ''],
            ])
            ->add('pages', IntegerType::class, [
                'attr' => ['placeholder' => ''],
            ])
            ->add('summary', TextareaType::class, [
                'attr' => ['placeholder' => ''],
            ])
            ->add('genre', TextType::class, [
                'attr' => ['placeholder' => ''],
            ])
            ->add('imageFile', FileType::class, [
                'mapped' => false, // This field is not mapped directly to the entity
                'required' => false,
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
