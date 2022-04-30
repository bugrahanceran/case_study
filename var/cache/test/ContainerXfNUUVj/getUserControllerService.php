<?php

namespace ContainerXfNUUVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UserController.php';

        $container->services['App\\Controller\\UserController'] = $instance = new \App\Controller\UserController();

        $instance->setContainer(($container->privates['.service_locator._5xd5lU'] ?? $container->load('get_ServiceLocator_5xd5lUService'))->withContext('App\\Controller\\UserController', $container));

        return $instance;
    }
}
