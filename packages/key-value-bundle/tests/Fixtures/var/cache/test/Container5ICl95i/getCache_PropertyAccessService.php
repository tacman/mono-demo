<?php

namespace Container5ICl95i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_PropertyAccessService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/psr/log/src/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

        return $container->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false);
    }
}
