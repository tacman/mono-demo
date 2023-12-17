<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiGridComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\ApiGrid\Components\ApiGridComponent' autowired service.
     *
     * @return \Survos\ApiGrid\Components\ApiGridComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/api-grid-bundle/src/Components/ApiGridComponent.php';
        include_once \dirname(__DIR__, 4).'/vendor/survos/api-grid-bundle/src/Service/DatatableService.php';

        $container->factories['service_container']['Survos\\ApiGrid\\Components\\ApiGridComponent'] = function ($container) {
            $a = ($container->privates['twig'] ?? self::getTwigService($container));

            if (isset($container->privates['Survos\\ApiGrid\\Components\\ApiGridComponent'])) {
                return $container->privates['Survos\\ApiGrid\\Components\\ApiGridComponent'];
            }

            return new \Survos\ApiGrid\Components\ApiGridComponent($a, ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['Survos\\ApiGrid\\Service\\DatatableService'] ??= new \Survos\ApiGrid\Service\DatatableService()), '@survos/api-grid-bundle/api_grid');
        };

        return $container->factories['service_container']['Survos\\ApiGrid\\Components\\ApiGridComponent']($container);
    }
}
