<?php

namespace ContainerFygxEGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlSanitizer_Extension_DetailsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'html_sanitizer.extension.details' shared service.
     *
     * @return \HtmlSanitizer\Extension\Details\DetailsExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Details/DetailsExtension.php';

        return $container->privates['html_sanitizer.extension.details'] = new \HtmlSanitizer\Extension\Details\DetailsExtension();
    }
}
