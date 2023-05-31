<?php

namespace ContainerFPtPMHf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_League_Oauth2Server_Command_UpdateClient_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.league.oauth2_server.command.update_client.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.league.oauth2_server.command.update_client.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('league:oauth2-server:update-client', [], 'Updates an OAuth2 client', false, #[\Closure(name: 'league.oauth2_server.command.update_client', class: 'League\\Bundle\\OAuth2ServerBundle\\Command\\UpdateClientCommand')] function () use ($container): \League\Bundle\OAuth2ServerBundle\Command\UpdateClientCommand {
            return ($container->privates['league.oauth2_server.command.update_client'] ?? $container->load('getLeague_Oauth2Server_Command_UpdateClientService'));
        });
    }
}
