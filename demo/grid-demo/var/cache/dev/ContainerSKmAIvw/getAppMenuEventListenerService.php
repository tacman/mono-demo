<?php

namespace ContainerSKmAIvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppMenuEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\AppMenuEventListener' shared autowired service.
     *
     * @return \App\EventListener\AppMenuEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/packages/bootstrap-bundle/src/Traits/KnpMenuHelperInterface.php';
        include_once \dirname(__DIR__, 6).'/packages/bootstrap-bundle/src/Traits/KnpMenuHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/src/EventListener/AppMenuEventListener.php';

        $a = ($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container));

        if (isset($container->privates['App\\EventListener\\AppMenuEventListener'])) {
            return $container->privates['App\\EventListener\\AppMenuEventListener'];
        }

        return $container->privates['App\\EventListener\\AppMenuEventListener'] = new \App\EventListener\AppMenuEventListener($a);
    }
}
