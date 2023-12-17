<?php

namespace Container9JdZFxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCrawlCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\CrawlerBundle\Command\CrawlCommand' shared autowired service.
     *
     * @return \Survos\CrawlerBundle\Command\CrawlCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/survos/crawler-bundle/src/Command/CrawlCommand.php';

        $container->privates['Survos\\CrawlerBundle\\Command\\CrawlCommand'] = $instance = new \Survos\CrawlerBundle\Command\CrawlCommand(($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)), ($container->services['survos.crawler_service'] ?? $container->load('getSurvos_CrawlerServiceService')), ($container->services['router'] ?? self::getRouterService($container)));

        $instance->setName('survos:crawl');
        $instance->setDescription('Crawl a website with different users');

        return $instance;
    }
}
