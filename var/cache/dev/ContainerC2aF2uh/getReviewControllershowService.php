<?php

namespace ContainerC2aF2uh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HRtw6RZ.App\Controller\ReviewController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HRtw6RZ.App\\Controller\\ReviewController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'review' => ['privates', '.errored..service_locator.HRtw6RZ.App\\Entity\\Review', NULL, 'Cannot autowire service ".service_locator.HRtw6RZ": it needs an instance of "App\\Entity\\Review" but this type has been excluded in "config/services.yaml".'],
        ], [
            'review' => 'App\\Entity\\Review',
        ]))->withContext('App\\Controller\\ReviewController::show()', $container);
    }
}
