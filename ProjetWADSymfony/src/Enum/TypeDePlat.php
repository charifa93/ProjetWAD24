<?php
namespace App\Enum;

enum TypeDePlat: string
{
    case  PetitDejeuner = 'Petit dejeuner';
    case Entree = 'Entree';
    case  PlatPrincipal= 'Plat principal';
    case  Dessert = 'Dessert';
    case  Boisson = 'Boisson';
    case Accompagnement = 'Accompagnement';
    case Apertif = 'Apertif';
    case Autre = 'Autre';
}