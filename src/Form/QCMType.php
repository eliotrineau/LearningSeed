<?php
// src/Form/QCMType.php

namespace App\Form;

use App\Entity\QCM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class QCMType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomQCM', TextType::class, array(
                'label' => 'Nouveau QCM :',
            ))
            ->add('score', TextType::class, array(
                'label' => 'Score :',
            ))
            ->add('question_1', TextType::class, array(
                'label' => 'Question N°1 :',
            ))
            ->add('question_2', TextType::class, array(
                'label' => 'Question N°2 :',
            ))
            ->add('question_3', TextType::class, array(
                'label' => 'Question N°3 :',
            ))
            ->add('question_4', TextType::class, array(
                'label' => 'Question N°4 :',
            ))
            ->add('question_5', TextType::class, array(
                'label' => 'Question N°5 :',
            ))
            ->add('reponse_1_1', TextType::class, array(
                'label' => 'Réponse N°1 :',
            ))
            ->add('reponse_1_2', TextType::class, array(
                'label' => 'Réponse N°2 :',
            ))
            ->add('reponse_1_3', TextType::class, array(
                'label' => 'Réponse N°3 :',
            ))
            ->add('reponse_1_4', TextType::class, array(
                'label' => 'Réponse N°4 :',
            ))
            ->add('reponse_2_1', TextType::class, array(
                'label' => 'Réponse N°1 :',
            ))
            ->add('reponse_2_2', TextType::class, array(
                'label' => 'Réponse N°2 :',
            ))
            ->add('reponse_2_3', TextType::class, array(
                'label' => 'Réponse N°3 :',
            ))
            ->add('reponse_2_4', TextType::class, array(
                'label' => 'Réponse N°4 :',
            ))
            ->add('reponse_3_1', TextType::class, array(
                'label' => 'Réponse N°1 :',
            ))
            ->add('reponse_3_2', TextType::class, array(
                'label' => 'Réponse N°2 :',
            ))
            ->add('reponse_3_3', TextType::class, array(
                'label' => 'Réponse N°3 :',
            ))
            ->add('reponse_3_4', TextType::class, array(
                'label' => 'Réponse N°4 :',
            ))
            ->add('reponse_4_1', TextType::class, array(
                'label' => 'Réponse N°1 :',
            ))
            ->add('reponse_4_2', TextType::class, array(
                'label' => 'Réponse N°2 :',
            ))
            ->add('reponse_4_3', TextType::class, array(
                'label' => 'Réponse N°3 :',
            ))
            ->add('reponse_4_4', TextType::class, array(
                'label' => 'Réponse N°4 :',
            ))
            ->add('reponse_5_1', TextType::class, array(
                'label' => 'Réponse N°1 :',
            ))
            ->add('reponse_5_2', TextType::class, array(
                'label' => 'Réponse N°2 :',
            ))
            ->add('reponse_5_3', TextType::class, array(
                'label' => 'Réponse N°3 :',
            ))
            ->add('reponse_5_4', TextType::class, array(
                'label' => 'Réponse N°4 :',
            ))
            ->add('correctAnswer_1', ChoiceType::class, [
                'label' => 'Réponse correcte N°1 :',
                'choices' => [
                    'Réponse 1' => 'reponse_1_1',
                    'Réponse 2' => 'reponse_1_2',
                    'Réponse 3' => 'reponse_1_3',
                    'Réponse 4' => 'reponse_1_4',
                ],
            ])
            ->add('correctAnswer_2', ChoiceType::class, [
                'label' => 'Réponse correcte N°2 :',
                'choices' => [
                    'Réponse 1' => 'reponse_2_1',
                    'Réponse 2' => 'reponse_2_2',
                    'Réponse 3' => 'reponse_2_3',
                    'Réponse 4' => 'reponse_2_4',
                ],
            ])
            ->add('correctAnswer_3', ChoiceType::class, [
                'label' => 'Réponse correcte N°3 :',
                'choices' => [
                    'Réponse 1' => 'reponse_3_1',
                    'Réponse 2' => 'reponse_3_2',
                    'Réponse 3' => 'reponse_3_3',
                    'Réponse 4' => 'reponse_3_4',
                ],
            ])
            ->add('correctAnswer_4', ChoiceType::class, [
                'label' => 'Réponse correcte N°4 :',
                'choices' => [
                    'Réponse 1' => 'reponse_4_1',
                    'Réponse 2' => 'reponse_4_2',
                    'Réponse 3' => 'reponse_4_3',
                    'Réponse 4' => 'reponse_4_4',
                ],
            ])
            ->add('correctAnswer_5', ChoiceType::class, [
                'label' => 'Réponse correcte N°5 :',
                'choices' => [
                    'Réponse 1' => 'reponse_5_1',
                    'Réponse 2' => 'reponse_5_2',
                    'Réponse 3' => 'reponse_5_3',
                    'Réponse 4' => 'reponse_5_4',
                ],
            ])
            ->add('niveau')
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => QCM::class,
        ]);
    }
}
