<?php

namespace ContainerSKmAIvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Survos\CommandBundle\Controller\CommandController' shared autowired service.
     *
     * @return \Survos\CommandBundle\Controller\CommandController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/survos/command-bundle/src/Controller/CommandController.php';

        $container->services['Survos\\CommandBundle\\Controller\\CommandController'] = $instance = new \Survos\CommandBundle\Controller\CommandController(($container->services['kernel'] ?? $container->get('kernel', 1)), ['app']);

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('Survos\\CommandBundle\\Controller\\CommandController', $container));

        return $instance;
    }
}
