<?php

namespace Container9JdZFxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSurvos_CrawlerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'survos.crawler_service' shared autowired service.
     *
     * @return \Survos\CrawlerBundle\Services\CrawlerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/crawler-bundle/src/Services/CrawlerService.php';

        return $container->services['survos.crawler_service'] = new \Survos\CrawlerBundle\Services\CrawlerService(['users' => [], 'routes_to_ignore' => [], 'max_per_route' => 3, 'base_url' => 'https://127.0.0.1:8000', 'initial_path' => '/', 'user' => 'juan@tt.com', 'login_path' => '/login', 'username_form_variable' => '_username', 'password_form_variable' => '_password', 'plaintext_password' => 'password', 'submit_button' => '.btn', 'user_class' => 'App\\Entity\\User', 'max_depth' => 1], 'https://127.0.0.1:8000', 'App\\Entity\\User', '/login', '.btn', 'password', '/', ($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->services['router'] ?? self::getRouterService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['security.untracked_token_storage'] ??= new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), [], '', [], 1, []);
    }
}
