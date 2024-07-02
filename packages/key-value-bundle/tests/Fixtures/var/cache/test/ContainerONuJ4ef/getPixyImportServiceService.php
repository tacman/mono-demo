<?php

namespace ContainerONuJ4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPixyImportServiceService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private 'Survos\KeyValueBundle\Service\PixyImportService' shared autowired service.
     *
     * @return \Survos\KeyValueBundle\Service\PixyImportService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/src/Service/PixyImportService.php';

        return $container->privates['Survos\\KeyValueBundle\\Service\\PixyImportService'] = new \Survos\KeyValueBundle\Service\PixyImportService('/home/tac/g/sites/headlines/data', ($container->privates['Survos\\KeyValueBundle\\Service\\KeyValueService'] ?? $container->load('getKeyValueServiceService')), ($container->privates['logger'] ?? self::getLoggerService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
