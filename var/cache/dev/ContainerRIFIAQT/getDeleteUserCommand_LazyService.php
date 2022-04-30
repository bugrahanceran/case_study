<?php

namespace ContainerRIFIAQT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteUserCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\DeleteUserCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\DeleteUserCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:delete-user', [], 'Deletes users from the database', false, function () use ($container): \App\Command\DeleteUserCommand {
            return ($container->privates['App\\Command\\DeleteUserCommand'] ?? $container->load('getDeleteUserCommandService'));
        });
    }
}
