<?php
// src/Form/IngredientType.php
namespace App\Form;

use App\Entity\DetailRecette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ingredient', TextType::class, [
                'label' => 'Ingrédient'
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => false
            ])
            ->add('unite', ChoiceType::class, [
                'label' => 'Unité',
                'choices' => [
                    'g' => 'g',
                    'ml' => 'ml',
                    'pcs' => 'pcs'
                ],
                'required' => false
            ]);
    }
}
