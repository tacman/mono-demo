<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\BootstrapBundle\Components\LinkComponent' autowired service.
     *
     * @return \Survos\BootstrapBundle\Components\LinkComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/bootstrap-bundle/src/Components/LinkComponent.php';

        $container->factories['service_container']['Survos\\BootstrapBundle\\Components\\LinkComponent'] = function ($container) {
            return new \Survos\BootstrapBundle\Components\LinkComponent(($container->privates['Stenope\\Bundle\\Routing\\UrlGenerator'] ?? self::getUrlGeneratorService($container)));
        };

        return $container->factories['service_container']['Survos\\BootstrapBundle\\Components\\LinkComponent']($container);
    }
}
