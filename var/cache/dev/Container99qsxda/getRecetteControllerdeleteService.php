<?php

namespace Container99qsxda;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecetteControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MAZWmLn.App\Controller\RecetteController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MAZWmLn.App\\Controller\\RecetteController::delete()'] = ($container->privates['.service_locator.MAZWmLn'] ?? $container->load('get_ServiceLocator_MAZWmLnService'))->withContext('App\\Controller\\RecetteController::delete()', $container);
    }
}
