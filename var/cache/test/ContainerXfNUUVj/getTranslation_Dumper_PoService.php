<?php

namespace ContainerXfNUUVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Dumper_PoService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';

        return $container->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
}
