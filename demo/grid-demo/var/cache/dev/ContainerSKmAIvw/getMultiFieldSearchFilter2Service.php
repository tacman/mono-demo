<?php

namespace ContainerSKmAIvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultiFieldSearchFilter2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\ApiGrid\Filter\MeiliSearch\MultiFieldSearchFilter' shared autowired service.
     *
     * @return \Survos\ApiGrid\Filter\MeiliSearch\MultiFieldSearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 6).'/packages/api-grid-bundle/src/Filter/MeiliSearch/FilterInterface.php';
        include_once \dirname(__DIR__, 6).'/packages/api-grid-bundle/src/Filter/MeiliSearch/UtilTrait.php';
        include_once \dirname(__DIR__, 6).'/packages/api-grid-bundle/src/Filter/MeiliSearch/AbstractSearchFilter.php';
        include_once \dirname(__DIR__, 6).'/packages/api-grid-bundle/src/Filter/MeiliSearch/MultiFieldSearchFilter.php';

        $a = ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container));

        if (isset($container->privates['Survos\\ApiGrid\\Filter\\MeiliSearch\\MultiFieldSearchFilter'])) {
            return $container->privates['Survos\\ApiGrid\\Filter\\MeiliSearch\\MultiFieldSearchFilter'];
        }

        return $container->privates['Survos\\ApiGrid\\Filter\\MeiliSearch\\MultiFieldSearchFilter'] = new \Survos\ApiGrid\Filter\MeiliSearch\MultiFieldSearchFilter($a, ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));
    }
}
