<?php

namespace ContainerX2dQP6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDateTimePickerTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\DateTimePickerType' shared autowired service.
     *
     * @return \App\Form\Type\DateTimePickerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/MomentFormatConverter.php';

        return $container->privates['App\\Form\\Type\\DateTimePickerType'] = new \App\Form\Type\DateTimePickerType(new \App\Utils\MomentFormatConverter());
    }
}
