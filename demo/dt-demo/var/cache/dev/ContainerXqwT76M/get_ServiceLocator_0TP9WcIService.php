<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0TP9WcIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0TP9WcI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0TP9WcI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
        ], [
            'bag' => '?',
        ]);
    }
}
