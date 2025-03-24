<?php

namespace Container99qsxda;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurControllerfavorisService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hx0Vgan.App\Controller\UtilisateurController::favoris()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hx0Vgan.App\\Controller\\UtilisateurController::favoris()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'utilisateur' => ['privates', '.errored..service_locator.hx0Vgan.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.hx0Vgan": it needs an instance of "App\\Entity\\Utilisateur" but this type has been excluded in "config/services.yaml".'],
            'recette' => ['privates', '.errored..service_locator.hx0Vgan.App\\Entity\\Recette', NULL, 'Cannot autowire service ".service_locator.hx0Vgan": it needs an instance of "App\\Entity\\Recette" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
            'recette' => 'App\\Entity\\Recette',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\UtilisateurController::favoris()', $container);
    }
}
