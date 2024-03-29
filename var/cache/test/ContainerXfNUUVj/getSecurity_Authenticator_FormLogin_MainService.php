<?php

namespace ContainerXfNUUVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/FormLoginAuthenticator.php';

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.database_users'] ?? $container->load('getSecurity_User_Provider_Concrete_DatabaseUsersService')), ($container->privates['security.authentication.success_handler.main.form_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Main_FormLoginService')), ($container->privates['security.authentication.failure_handler.main.form_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_Main_FormLoginService')), ['check_path' => 'security_login', 'login_path' => 'security_login', 'enable_csrf' => true, 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true, 'form_only' => false]);
    }
}
