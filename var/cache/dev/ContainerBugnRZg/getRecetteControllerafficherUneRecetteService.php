<?php

namespace ContainerBugnRZg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecetteControllerafficherUneRecetteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wznEwKw.App\Controller\RecetteController::afficherUneRecette()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wznEwKw.App\\Controller\\RecetteController::afficherUneRecette()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'recette' => ['privates', 'App\\Repository\\RecetteRepository', 'getRecetteRepositoryService', true],
            'noteRepository' => ['privates', 'App\\Repository\\NoteRepository', 'getNoteRepositoryService', true],
        ], [
            'recette' => 'App\\Repository\\RecetteRepository',
            'noteRepository' => 'App\\Repository\\NoteRepository',
        ]))->withContext('App\\Controller\\RecetteController::afficherUneRecette()', $container);
    }
}
