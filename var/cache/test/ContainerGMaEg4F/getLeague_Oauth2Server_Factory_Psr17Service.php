<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Factory_Psr17Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.factory.psr17' shared service.
     *
     * @return \Nyholm\Psr7\Factory\Psr17Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/RequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ResponseFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ServerRequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/StreamFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UploadedFileFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UriFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nyholm/psr7/src/Factory/Psr17Factory.php';

        return $container->privates['league.oauth2_server.factory.psr17'] = new \Nyholm\Psr7\Factory\Psr17Factory();
    }
}
