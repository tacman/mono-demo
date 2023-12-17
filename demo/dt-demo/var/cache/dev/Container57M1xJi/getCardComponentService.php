<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\BootstrapBundle\Components\CardComponent' autowired service.
     *
     * @return \Survos\BootstrapBundle\Components\CardComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/bootstrap-bundle/src/Components/CardComponent.php';

        $container->factories['service_container']['Survos\\BootstrapBundle\\Components\\CardComponent'] = function ($container) {
            return new \Survos\BootstrapBundle\Components\CardComponent();
        };

        return $container->factories['service_container']['Survos\\BootstrapBundle\\Components\\CardComponent']($container);
    }
}
