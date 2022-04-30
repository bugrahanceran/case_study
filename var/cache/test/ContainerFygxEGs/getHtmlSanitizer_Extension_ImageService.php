<?php

namespace ContainerFygxEGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlSanitizer_Extension_ImageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'html_sanitizer.extension.image' shared service.
     *
     * @return \HtmlSanitizer\Extension\Image\ImageExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Image/ImageExtension.php';

        return $container->privates['html_sanitizer.extension.image'] = new \HtmlSanitizer\Extension\Image\ImageExtension();
    }
}