<?php

namespace App\Form;

use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\TypeDePlat;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('saison', EntityType::class, [
                'class' => Saison::class,
            ])
            ->add('typeDePlat', EntityType::class, [ 
                'class' => TypeDePlat::class,   
            ])
            ->add('origine', EntityType::class, [
                'class' => Origine::class,
            ])
            
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
