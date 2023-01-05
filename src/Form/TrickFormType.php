<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\FigureGroup;
use App\Form\PicturesType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //form Pictures
            ->add('pictures', CollectionType::class, [
                'entry_type' => PicturesType::class,
                'label' => false,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
            ])

            //form trick
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Nom de la figure'
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
            ])
            ->add('figureGroup', EntityType::class, [
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
