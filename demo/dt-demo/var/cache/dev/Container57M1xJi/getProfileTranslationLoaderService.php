<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileTranslationLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Translation\ProfileTranslationLoader' shared autowired service.
     *
     * @return \App\Translation\ProfileTranslationLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Translation/ProfileTranslationLoader.php';

        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['App\\Translation\\ProfileTranslationLoader'])) {
            return $container->privates['App\\Translation\\ProfileTranslationLoader'];
        }

        return $container->privates['App\\Translation\\ProfileTranslationLoader'] = new \App\Translation\ProfileTranslationLoader($a);
    }
}
