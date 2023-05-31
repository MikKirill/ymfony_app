<?php

namespace ContainerFPtPMHf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Controller_TokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'league.oauth2_server.controller.token' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Controller\TokenController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Controller/TokenController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/HttpFoundationFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/Factory/HttpFoundationFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/RequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ResponseFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ServerRequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/StreamFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UploadedFileFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UriFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nyholm/psr7/src/Factory/Psr17Factory.php';

        return $container->services['league.oauth2_server.controller.token'] = new \League\Bundle\OAuth2ServerBundle\Controller\TokenController(($container->privates['league.oauth2_server.authorization_server'] ?? $container->load('getLeague_Oauth2Server_AuthorizationServerService')), ($container->privates['league.oauth2_server.factory.psr_http'] ?? $container->load('getLeague_Oauth2Server_Factory_PsrHttpService')), ($container->privates['league.oauth2_server.factory.http_foundation'] ??= new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory()), ($container->privates['league.oauth2_server.factory.psr17'] ??= new \Nyholm\Psr7\Factory\Psr17Factory()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
