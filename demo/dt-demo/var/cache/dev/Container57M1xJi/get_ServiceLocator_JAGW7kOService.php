<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JAGW7kOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JAGW7kO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JAGW7kO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'official' => ['privates', '.errored..service_locator.JAGW7kO.App\\Entity\\Official', NULL, 'Cannot autowire service ".service_locator.JAGW7kO": it needs an instance of "App\\Entity\\Official" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'official' => 'App\\Entity\\Official',
        ]);
    }
}
