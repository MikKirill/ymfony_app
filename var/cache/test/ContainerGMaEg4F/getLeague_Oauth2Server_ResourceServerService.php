<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_ResourceServerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.resource_server' shared service.
     *
     * @return \League\OAuth2\Server\ResourceServer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/ResourceServer.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/CryptKey.php';

        $a = ($container->privates['league.oauth2_server.repository.access_token'] ?? $container->load('getLeague_Oauth2Server_Repository_AccessTokenService'));

        if (isset($container->privates['league.oauth2_server.resource_server'])) {
            return $container->privates['league.oauth2_server.resource_server'];
        }

        return $container->privates['league.oauth2_server.resource_server'] = new \League\OAuth2\Server\ResourceServer($a, new \League\OAuth2\Server\CryptKey($container->getEnv('resolve:OAUTH_PUBLIC_KEY'), NULL, false));
    }
}
