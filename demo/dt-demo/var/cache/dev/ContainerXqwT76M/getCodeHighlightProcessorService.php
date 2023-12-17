<?php

namespace ContainerXqwT76M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeHighlightProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Stenope\Bundle\Processor\CodeHighlightProcessor' shared service.
     *
     * @return \Stenope\Bundle\Processor\CodeHighlightProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Behaviour/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Processor/CodeHighlightProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Behaviour/HtmlCrawlerManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/stenope/stenope/src/Service/NaiveHtmlCrawlerManager.php';

        return $container->privates['Stenope\\Bundle\\Processor\\CodeHighlightProcessor'] = new \Stenope\Bundle\Processor\CodeHighlightProcessor(($container->privates['Stenope\\Bundle\\Highlighter\\Prism'] ?? $container->load('getPrismService')), ($container->privates['Stenope\\Bundle\\Service\\NaiveHtmlCrawlerManager'] ??= new \Stenope\Bundle\Service\NaiveHtmlCrawlerManager()), 'content');
    }
}
