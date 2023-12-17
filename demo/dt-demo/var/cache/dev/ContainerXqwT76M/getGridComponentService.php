<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGridComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\Grid\Components\GridComponent' autowired service.
     *
     * @return \Survos\Grid\Components\GridComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/grid-bundle/src/Components/GridComponent.php';

        $container->factories['service_container']['Survos\\Grid\\Components\\GridComponent'] = function ($container) {
            $a = ($container->privates['twig'] ?? self::getTwigService($container));

            if (isset($container->privates['Survos\\Grid\\Components\\GridComponent'])) {
                return $container->privates['Survos\\Grid\\Components\\GridComponent'];
            }

            return new \Survos\Grid\Components\GridComponent(($container->services['doctrine'] ?? self::getDoctrineService($container)), $a, ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), '@survos/grid-bundle/grid');
        };

        return $container->factories['service_container']['Survos\\Grid\\Components\\GridComponent']($container);
    }
}
