<?php

namespace ContainerONuJ4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_PrivateServicesLocatorService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver.backed_enum_resolver' => ['privates', 'argument_resolver.backed_enum_resolver', 'getArgumentResolver_BackedEnumResolverService', true],
            'argument_resolver.datetime' => ['privates', 'argument_resolver.datetime', 'getArgumentResolver_DatetimeService', true],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', true],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', true],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', true],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', true],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', true],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', true],
            'argument_resolver.query_parameter_value_resolver' => ['privates', 'argument_resolver.query_parameter_value_resolver', 'getArgumentResolver_QueryParameterValueResolverService', true],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'controller.cache_attribute_listener' => ['privates', 'controller.cache_attribute_listener', 'getController_CacheAttributeListenerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', true],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'config_builder.warmer' => ['privates', 'config_builder.warmer', 'getConfigBuilder_WarmerService', true],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', true],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', true],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', true],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', true],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', true],
            'debug.event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'debug.controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'debug.argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'argument_resolver.not_tagged_controller' => ['privates', 'argument_resolver.not_tagged_controller', 'getArgumentResolver_NotTaggedControllerService', true],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', true],
            'secrets.env_var_loader' => ['privates', 'secrets.env_var_loader', 'getSecrets_EnvVarLoaderService', true],
            'Survos\\KeyValueBundle\\Service\\PixyImportService' => ['privates', 'Survos\\KeyValueBundle\\Service\\PixyImportService', 'getPixyImportServiceService', true],
            'Survos\\KeyValueBundle\\Service\\KeyValueService' => ['privates', 'Survos\\KeyValueBundle\\Service\\KeyValueService', 'getKeyValueServiceService', true],
            'Survos\\KeyValueBundle\\EventListener\\CsvHeaderEventListener' => ['privates', 'Survos\\KeyValueBundle\\EventListener\\CsvHeaderEventListener', 'getCsvHeaderEventListenerService', true],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'debug.event_dispatcher.inner' => ['privates', 'debug.event_dispatcher.inner', 'getDebug_EventDispatcher_InnerService', false],
            'debug.controller_resolver.inner' => ['privates', 'debug.controller_resolver.inner', 'getDebug_ControllerResolver_InnerService', false],
            'debug.argument_resolver.inner' => ['privates', 'debug.argument_resolver.inner', 'getDebug_ArgumentResolver_InnerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', true],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', true],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Psr\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', true],
            'error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'error_renderer' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', true],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', true],
            'Symfony\\Component\\Stopwatch\\Stopwatch' => ['services', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.tDsuIE_', 'get_ServiceLocator_TDsuIEService', true],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
        ], [
            'argument_metadata_factory' => '?',
            'argument_resolver.backed_enum_resolver' => '?',
            'argument_resolver.datetime' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.variadic' => '?',
            'argument_resolver.query_parameter_value_resolver' => '?',
            'response_listener' => '?',
            'locale_listener' => '?',
            'validate_request_listener' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'exception_listener' => '?',
            'controller.cache_attribute_listener' => '?',
            'parameter_bag' => '?',
            'container.env_var_processor' => '?',
            'config_builder.warmer' => '?',
            'error_handler.error_renderer.html' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_clearer' => '?',
            'test.client.history' => '?',
            'test.client.cookiejar' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'debug.event_dispatcher' => '?',
            'debug.controller_resolver' => '?',
            'debug.argument_resolver' => '?',
            'argument_resolver.not_tagged_controller' => '?',
            'secrets.vault' => '?',
            'secrets.env_var_loader' => '?',
            'Survos\\KeyValueBundle\\Service\\PixyImportService' => '?',
            'Survos\\KeyValueBundle\\Service\\KeyValueService' => '?',
            'Survos\\KeyValueBundle\\EventListener\\CsvHeaderEventListener' => '?',
            'logger' => '?',
            'debug.event_dispatcher.inner' => '?',
            'debug.controller_resolver.inner' => '?',
            'debug.argument_resolver.inner' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Psr\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'error_renderer.html' => '?',
            'error_renderer' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => '?',
            'Symfony\\Component\\Stopwatch\\Stopwatch' => '?',
            'argument_resolver.controller_locator' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'controller_resolver' => '?',
            'argument_resolver' => '?',
        ]);
    }
}
