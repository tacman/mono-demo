<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTermCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TermCrudController' shared autowired service.
     *
     * @return \App\Controller\TermCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TermCrudController.php';

        $container->services['App\\Controller\\TermCrudController'] = $instance = new \App\Controller\TermCrudController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\TermCrudController', $container));

        return $instance;
    }
}
