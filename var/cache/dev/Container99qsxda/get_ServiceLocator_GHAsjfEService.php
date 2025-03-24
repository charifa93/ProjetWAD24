<?php

namespace Container99qsxda;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GHAsjfEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gHAsjfE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gHAsjfE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'rep' => ['privates', 'App\\Repository\\RecetteRepository', 'getRecetteRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\RecetteRepository',
        ]);
    }
}
