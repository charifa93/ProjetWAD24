<?php

namespace App\Form;

use App\Entity\Recette;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('datePublication', null, [
                'widget' => 'single_text',
            ])
            ->add('tempsDePreparation', null, [
                'widget' => 'single_text',
            ])
            ->add('tempsDeCuison', null, [
                'widget' => 'single_text',
            ])
            ->add('difficulte')
            ->add('image')
            ->add('nombrePortions')
            ->add('saison')
            ->add('TypeDePlat')
            ->add('origine')
            ->add('utilisateur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
