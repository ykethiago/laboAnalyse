<?php

namespace ContainerFFrLb85;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Sender'.\DIRECTORY_SEPARATOR.'SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Sender'.\DIRECTORY_SEPARATOR.'SendersLocator.php';

        $a = ($container->privates['.service_locator.c7f47p7'] ?? $container->load('get_ServiceLocator_C7f47p7Service'));

        if (isset($container->privates['messenger.bus.default.middleware.send_message'])) {
            return $container->privates['messenger.bus.default.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['messenger.bus.default.middleware.send_message'])) {
            return $container->privates['messenger.bus.default.middleware.send_message'];
        }

        $container->privates['messenger.bus.default.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => ['async'], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => ['async'], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => ['async']], $a), $b, true);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
