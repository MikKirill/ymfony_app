<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_InMemory_ClientService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.manager.in_memory.client' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\InMemory\ClientManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/ClientManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Manager/InMemory/ClientManager.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['league.oauth2_server.manager.in_memory.client'])) {
            return $container->privates['league.oauth2_server.manager.in_memory.client'];
        }

        return $container->privates['league.oauth2_server.manager.in_memory.client'] = new \League\Bundle\OAuth2ServerBundle\Manager\InMemory\ClientManager($a);
    }
}