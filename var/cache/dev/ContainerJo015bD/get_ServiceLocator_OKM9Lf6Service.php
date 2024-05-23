<?php

namespace ContainerJo015bD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OKM9Lf6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OKM9Lf6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OKM9Lf6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'bookRepository' => 'App\\Repository\\BookRepository',
            'entityManager' => '?',
        ]);
    }
}