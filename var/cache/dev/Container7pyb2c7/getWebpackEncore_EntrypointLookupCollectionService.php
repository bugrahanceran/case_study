<?php

namespace Container7pyb2c7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_EntrypointLookupCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.entrypoint_lookup_collection' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollectionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollection.php';

        return $container->privates['webpack_encore.entrypoint_lookup_collection'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            '_default' => ['privates', 'webpack_encore.entrypoint_lookup[_default]', 'getWebpackEncore_EntrypointLookupDefaultService', true],
        ], [
            '_default' => '?',
        ]), '_default');
    }
}
