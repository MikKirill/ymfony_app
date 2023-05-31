<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Converter_UserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'league.oauth2_server.converter.user' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Converter\UserConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Converter/UserConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Converter/UserConverter.php';

        return $container->privates['league.oauth2_server.converter.user'] = new \League\Bundle\OAuth2ServerBundle\Converter\UserConverter();
    }
}