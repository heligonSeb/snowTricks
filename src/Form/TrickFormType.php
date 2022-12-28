<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\FigureGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Nom de la figure'
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
            ])
            ->add('figureGroup_id', EntityType::class, [
                'class' => FigureGroup::class,
                'choice_label' => function ($figureGroup) {
                    return $figureGroup->getName();
                },
                'label' => 'Nom du groupe de la figure'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
