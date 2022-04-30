<?php

namespace ContainerFygxEGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Markdown_LeagueCommonMarkConverterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.markdown.league_common_mark_converter' shared service.
     *
     * @return \League\CommonMark\CommonMarkConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/commonmark/src/ConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/commonmark/src/MarkdownConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/commonmark/src/MarkdownConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/commonmark/src/CommonMarkConverter.php';

        return $container->privates['twig.markdown.league_common_mark_converter'] = ($container->privates['twig.markdown.league_common_mark_converter_factory'] ?? $container->load('getTwig_Markdown_LeagueCommonMarkConverterFactoryService'))->__invoke();
    }
}
