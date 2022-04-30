<?php

namespace ContainerFygxEGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListUsersCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Command\ListUsersCommand' shared autowired service.
     *
     * @return \App\Command\ListUsersCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ListUsersCommand.php';

        $container->privates['App\\Command\\ListUsersCommand'] = $instance = new \App\Command\ListUsersCommand(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), 'anonymous@example.com', ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setName('app:list-users');
        $instance->setAliases([0 => 'app:users']);
        $instance->setDescription('Lists all the existing users');

        return $instance;
    }
}
