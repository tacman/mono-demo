<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultiFieldSearchFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\ApiGrid\Api\Filter\MultiFieldSearchFilter' shared service.
     *
     * @return \Survos\ApiGrid\Api\Filter\MultiFieldSearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 6).'/packages/api-grid-bundle/src/Api/Filter/MultiFieldSearchFilter.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['Survos\\ApiGrid\\Api\\Filter\\MultiFieldSearchFilter'])) {
            return $container->privates['Survos\\ApiGrid\\Api\\Filter\\MultiFieldSearchFilter'];
        }

        return $container->privates['Survos\\ApiGrid\\Api\\Filter\\MultiFieldSearchFilter'] = new \Survos\ApiGrid\Api\Filter\MultiFieldSearchFilter($a, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}
