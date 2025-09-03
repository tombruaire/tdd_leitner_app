<?php

namespace App\Form;

use App\Entity\Box;
use App\Entity\Flashcard;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlashcardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
                'attr' => [
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                ],
            ])
            ->add('reponse', TextType::class, [
                'label' => 'Réponse',
                'attr' => [
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                ],
            ])
            ->add('box', EntityType::class, [
                'label' => 'Box',
                'class' => Box::class,
                'choice_label' => 'id',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Flashcard::class,
        ]);
    }
}
