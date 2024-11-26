<?php

namespace App\Form;

use App\Enum\Saison;
use App\Enum\Origine;
use App\Entity\Recette;
use App\Enum\TypeDePlat;
use App\Enum\Preparations;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 
     
            ->add('titre', TextType::class, [
                'label' => 'Nom de la recette',
                
            ])  
            ->add('description', TextareaType::class, [
                'label' => 'Description de la recette',
                
            ])
            ->add('datePublication', DateType::class, [
                'label' => 'Date de publication',
                
                'widget' => 'single_text',
            ])
            ->add('tempsDePreparation', TimeType::class, [
                'label' => 'Temps de préparation',
                
                'widget' => 'single_text',
            ])
            ->add('tempsDeCuison', TimeType::class, [
                'label' => 'Temps de cuisson',
                
                'widget' => 'single_text',
            ])
            ->add('difficulte', ChoiceType::class, [
                'label' => 'Difficulté',
                
                'choices' => [
                    'Facile' => 'facile',
                    'Moyen' => 'moyen',
                    'Difficile' => 'difficile',
                ],
                'placeholder' => 'Sélectionnez une difficulté', // Optionnel, pour une valeur par défaut vide
            ])
            ->add('image', FileType::class, [
                'data_class' => null,
                
            ])
            ->add('nombrePortions', IntegerType::class, [
                'label' => 'Nombre de portions',
                
            ])
            ->add('saison', ChoiceType::class, [
                'choices' => Saison::cases(),
                'choice_label' => fn(Saison $saison) => $saison->value,  // Pour afficher la valeur de l'énum
                'label' => 'Saison',
            ])
              
            ->add('origine', ChoiceType::class, [
                'choices' => Origine::cases(),
                'choice_label' => fn(Origine $origine) => $origine->value,  // Pour afficher la valeur de l'énum
                'label' => 'Origine',
            ])
            ->add(child: 'typeDePlat', type: ChoiceType::class, options: [
                'choices' => TypeDePlat::cases(),
                'choice_label' => fn(TypeDePlat $typeDePlat) => $typeDePlat->value,  // Pour afficher la valeur de l'énum
                'label' => 'Type de plat',
            ])
            ->add('preparations', ChoiceType::class, options: [
                'choices'=> Preparations::cases(),
                'choice_label' => fn(Preparations $preparation) => $preparation->value,  // Pour afficher la valeur de l'énum
                'label'=> 'Preparations',
                ])
                ;       
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => recette::class,
        ]);
    }
}
