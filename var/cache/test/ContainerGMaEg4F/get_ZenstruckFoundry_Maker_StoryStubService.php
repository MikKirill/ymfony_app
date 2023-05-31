<?php

namespace ContainerGMaEg4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_StoryStubService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.story_stub' shared service.
     *
     * @return \Zenstruck\Foundry\Bundle\Command\StubMakeStory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Bundle/Command/StubCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Bundle/Command/StubMakeStory.php';

        $container->privates['.zenstruck_foundry.maker.story_stub'] = $instance = new \Zenstruck\Foundry\Bundle\Command\StubMakeStory();

        $instance->setName('make:story');

        return $instance;
    }
}