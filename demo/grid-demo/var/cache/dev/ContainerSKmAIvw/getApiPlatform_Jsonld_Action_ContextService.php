<?php

namespace ContainerSKmAIvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Jsonld_Action_ContextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.jsonld.action.context' shared service.
     *
     * @return \ApiPlatform\JsonLd\Action\ContextAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Action/ContextAction.php';

        return $container->services['api_platform.jsonld.action.context'] = new \ApiPlatform\JsonLd\Action\ContextAction(($container->privates['api_platform.jsonld.context_builder'] ?? self::getApiPlatform_Jsonld_ContextBuilderService($container)), ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.state_provider.content_negotiation'] ?? $container->load('getApiPlatform_StateProvider_ContentNegotiationService')), ($container->privates['api_platform.state_processor.write'] ?? $container->load('getApiPlatform_StateProcessor_WriteService')), ($container->privates['serializer'] ?? self::getSerializerService($container)));
    }
}
