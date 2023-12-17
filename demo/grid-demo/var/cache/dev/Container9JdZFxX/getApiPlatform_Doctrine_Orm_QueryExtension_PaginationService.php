<?php

namespace Container9JdZFxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.pagination' shared autowired service.
     *
     * @return \Survos\ApiGrid\Paginator\SlicePaginationExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/survos/api-grid-bundle/src/Paginator/SlicePaginationExtension.php';

        return $container->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \Survos\ApiGrid\Paginator\SlicePaginationExtension(($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['api_platform.pagination'] ?? $container->load('getApiPlatform_PaginationService')));
    }
}
