<?php

namespace ContainerWoQtVxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\LoginAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/LoginAuthenticator.php';

        return $container->privates['App\\Security\\LoginAuthenticator'] = new \App\Security\LoginAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
