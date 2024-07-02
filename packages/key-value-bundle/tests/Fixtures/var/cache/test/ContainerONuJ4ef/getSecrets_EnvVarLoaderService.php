<?php

namespace ContainerONuJ4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_EnvVarLoaderService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private 'secrets.env_var_loader' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\StaticEnvVarLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/StaticEnvVarLoader.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';

        return $container->privates['secrets.env_var_loader'] = new \Symfony\Component\DependencyInjection\StaticEnvVarLoader(($container->privates['secrets.vault'] ??= new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/'.$container->getEnv('string:default:kernel.environment:APP_RUNTIME_ENV')), $container->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
    }
}
