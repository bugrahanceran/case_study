<?php

namespace ContainerXfNUUVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vm_Et4CService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.vm.Et4C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vm.Et4C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BlogController::delete' => ['privates', '.service_locator.Bnq4aHZ', 'get_ServiceLocator_Bnq4aHZService', true],
            'App\\Controller\\Admin\\BlogController::edit' => ['privates', '.service_locator.Bnq4aHZ', 'get_ServiceLocator_Bnq4aHZService', true],
            'App\\Controller\\Admin\\BlogController::index' => ['privates', '.service_locator.k57wwuD', 'get_ServiceLocator_K57wwuDService', true],
            'App\\Controller\\Admin\\BlogController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\BlogController::show' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController::commentForm' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController::commentNew' => ['privates', '.service_locator.juHxRDM', 'get_ServiceLocator_JuHxRDMService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.8ElztDJ', 'get_ServiceLocator_8ElztDJService', true],
            'App\\Controller\\BlogController::postShow' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController::search' => ['privates', '.service_locator.k57wwuD', 'get_ServiceLocator_K57wwuDService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.cYZyjMF', 'get_ServiceLocator_CYZyjMFService', true],
            'App\\Controller\\UserController::changePassword' => ['privates', '.service_locator.mK6IRPJ', 'get_ServiceLocator_MK6IRPJService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\BlogController:delete' => ['privates', '.service_locator.Bnq4aHZ', 'get_ServiceLocator_Bnq4aHZService', true],
            'App\\Controller\\Admin\\BlogController:edit' => ['privates', '.service_locator.Bnq4aHZ', 'get_ServiceLocator_Bnq4aHZService', true],
            'App\\Controller\\Admin\\BlogController:index' => ['privates', '.service_locator.k57wwuD', 'get_ServiceLocator_K57wwuDService', true],
            'App\\Controller\\Admin\\BlogController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\BlogController:show' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController:commentForm' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController:commentNew' => ['privates', '.service_locator.juHxRDM', 'get_ServiceLocator_JuHxRDMService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.8ElztDJ', 'get_ServiceLocator_8ElztDJService', true],
            'App\\Controller\\BlogController:postShow' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\BlogController:search' => ['privates', '.service_locator.k57wwuD', 'get_ServiceLocator_K57wwuDService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.cYZyjMF', 'get_ServiceLocator_CYZyjMFService', true],
            'App\\Controller\\UserController:changePassword' => ['privates', '.service_locator.mK6IRPJ', 'get_ServiceLocator_MK6IRPJService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\BlogController::delete' => '?',
            'App\\Controller\\Admin\\BlogController::edit' => '?',
            'App\\Controller\\Admin\\BlogController::index' => '?',
            'App\\Controller\\Admin\\BlogController::new' => '?',
            'App\\Controller\\Admin\\BlogController::show' => '?',
            'App\\Controller\\BlogController::commentForm' => '?',
            'App\\Controller\\BlogController::commentNew' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::postShow' => '?',
            'App\\Controller\\BlogController::search' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::changePassword' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\BlogController:delete' => '?',
            'App\\Controller\\Admin\\BlogController:edit' => '?',
            'App\\Controller\\Admin\\BlogController:index' => '?',
            'App\\Controller\\Admin\\BlogController:new' => '?',
            'App\\Controller\\Admin\\BlogController:show' => '?',
            'App\\Controller\\BlogController:commentForm' => '?',
            'App\\Controller\\BlogController:commentNew' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:postShow' => '?',
            'App\\Controller\\BlogController:search' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:changePassword' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
