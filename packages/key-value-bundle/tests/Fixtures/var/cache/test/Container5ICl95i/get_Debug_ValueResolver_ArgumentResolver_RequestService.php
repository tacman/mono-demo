<?php

namespace Container5ICl95i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_ValueResolver_ArgumentResolver_RequestService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private '.debug.value_resolver.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestValueResolver.php';

        return $container->privates['.debug.value_resolver.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($container->privates['argument_resolver.request'] ??= new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
