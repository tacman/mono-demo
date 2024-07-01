<?php

namespace ContainerKoSCo4l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPixieControllerimportService extends Survos_PixieBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.NWvQ3a1.Survos\PixieBundle\Controller\PixieController::import()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NWvQ3a1.Survos\\PixieBundle\\Controller\\PixieController::import()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'pixieService' => ['privates', 'Survos\\PixieBundle\\Service\\PixieService', 'getPixieServiceService', true],
            'pixieImportService' => ['privates', 'Survos\\PixieBundle\\Service\\PixieImportService', 'getPixieImportServiceService', true],
        ], [
            'pixieService' => 'Survos\\PixieBundle\\Service\\PixieService',
            'pixieImportService' => 'Survos\\PixieBundle\\Service\\PixieImportService',
        ]))->withContext('Survos\\PixieBundle\\Controller\\PixieController::import()', $container);
    }
}
