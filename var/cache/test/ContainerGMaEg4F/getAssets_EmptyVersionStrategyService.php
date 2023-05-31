<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_EmptyVersionStrategyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'assets.empty_version_strategy' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';

        return $container->privates['assets.empty_version_strategy'] = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy();
    }
}
