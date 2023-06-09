<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_InMemory_AccessTokenService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.manager.in_memory.access_token' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\InMemory\AccessTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/AccessTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/InMemory/AccessTokenManager.php';

        return $container->privates['league.oauth2_server.manager.in_memory.access_token'] = new \League\Bundle\OAuth2ServerBundle\Manager\InMemory\AccessTokenManager(true);
    }
}
