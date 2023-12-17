<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_FosJsRouting_DumpCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.fos_js_routing.dump_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.fos_js_routing.dump_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('fos:js-routing:dump', [], 'Dumps exposed routes to the filesystem', false, #[\Closure(name: 'fos_js_routing.dump_command', class: 'FOS\\JsRoutingBundle\\Command\\DumpCommand')] fn (): \FOS\JsRoutingBundle\Command\DumpCommand => ($container->privates['fos_js_routing.dump_command'] ?? $container->load('getFosJsRouting_DumpCommandService')));
    }
}
