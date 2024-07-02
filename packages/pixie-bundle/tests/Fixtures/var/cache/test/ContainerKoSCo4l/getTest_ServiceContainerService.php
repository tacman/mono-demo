<?php

namespace ContainerKoSCo4l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_ServiceContainerService extends Survos_PixieBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator', ['cache.default_clearer' => 'cache.app_clearer', 'debug.event_dispatcher' => 'debug.event_dispatcher.inner', 'debug.controller_resolver' => 'debug.controller_resolver.inner', 'debug.argument_resolver' => 'debug.argument_resolver.inner', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => 'parameter_bag', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => 'parameter_bag', 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Psr\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => 'http_kernel', 'Symfony\\Component\\HttpFoundation\\RequestStack' => 'request_stack', 'Symfony\\Component\\HttpKernel\\KernelInterface' => 'kernel', 'Symfony\\Component\\String\\Slugger\\SluggerInterface' => 'slugger', 'error_renderer.html' => 'error_handler.error_renderer.html', 'error_renderer' => 'error_handler.error_renderer.html', 'Psr\\Container\\ContainerInterface $parameterBag' => 'parameter_bag', 'Psr\\Cache\\CacheItemPoolInterface' => 'cache.app', 'Symfony\\Contracts\\Cache\\CacheInterface' => 'cache.app', 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => 'debug.file_link_formatter', 'Symfony\\Component\\Stopwatch\\Stopwatch' => 'debug.stopwatch', 'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => 'property_accessor', 'Symfony\\Component\\PropertyInfo\\PropertyReadInfoExtractorInterface' => 'property_info.reflection_extractor', 'Symfony\\Component\\PropertyInfo\\PropertyWriteInfoExtractorInterface' => 'property_info.reflection_extractor', 'argument_resolver.controller_locator' => '.service_locator.qHo9PeR', 'Psr\\Log\\LoggerInterface' => 'logger', 'controller_resolver' => 'debug.controller_resolver.inner', 'argument_resolver' => 'debug.argument_resolver.inner']);
    }
}
