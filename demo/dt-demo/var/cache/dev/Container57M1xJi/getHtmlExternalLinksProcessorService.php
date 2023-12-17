<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlExternalLinksProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Stenope\Bundle\Processor\HtmlExternalLinksProcessor' shared service.
     *
     * @return \Stenope\Bundle\Processor\HtmlExternalLinksProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Behaviour/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Processor/HtmlExternalLinksProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Behaviour/HtmlCrawlerManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Service/NaiveHtmlCrawlerManager.php';

        return $container->privates['Stenope\\Bundle\\Processor\\HtmlExternalLinksProcessor'] = new \Stenope\Bundle\Processor\HtmlExternalLinksProcessor(($container->privates['Stenope\\Bundle\\Service\\NaiveHtmlCrawlerManager'] ??= new \Stenope\Bundle\Service\NaiveHtmlCrawlerManager()), 'content');
    }
}
