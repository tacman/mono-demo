<?php

namespace ContainerSKmAIvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDumpTranslationsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Survos\CommandBundle\Command\DumpTranslationsCommand' shared autowired service.
     *
     * @return \Survos\CommandBundle\Command\DumpTranslationsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/console-extra/src/Invokable.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/console-extra/src/InvokableServiceCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/console-extra/src/ConfigureWithAttributes.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/console-extra/src/RunsCommands.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/console-extra/src/RunsProcesses.php';
        include_once \dirname(__DIR__, 4).'/vendor/survos/command-bundle/src/Command/DumpTranslationsCommand.php';

        $container->services['Survos\\CommandBundle\\Command\\DumpTranslationsCommand'] = $instance = new \Survos\CommandBundle\Command\DumpTranslationsCommand(($container->services['kernel'] ?? $container->get('kernel', 1)), ['app']);

        $instance->setInvokeContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
        ], [
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
        ]))->withContext('Survos\\CommandBundle\\Command\\DumpTranslationsCommand', $container));
        $instance->setName('survos:command:dump-as-messages');
        $instance->setDescription('Dump the command descriptions as a message for file translations');

        return $instance;
    }
}
