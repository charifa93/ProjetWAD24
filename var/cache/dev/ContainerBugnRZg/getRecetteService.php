<?php

namespace ContainerBugnRZg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecetteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.MAZWmLn.App\Entity\Recette' shared service.
     *
     * @return \App\Entity\Recette
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.MAZWmLn": it needs an instance of "App\\Entity\\Recette" but this type has been excluded in "config/services.yaml".');
    }
}
