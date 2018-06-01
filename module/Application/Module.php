<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Log\Logger;
use Application\Service\LogHandlingService;
use Application\Service\LogHandlingServiceFactory;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $app = $e->getApplication();
        $sm = $app->getServiceManager();
        
        $eventManager->attach(MvcEvent::EVENT_ROUTE,
            
            function(MvcEvent $e) {
                $sm = $e->getApplication()->getServiceManager();
                $em = $sm->get('doctrine.entitymanager.orm_default');
                /**
                 *
                 * @var LogHandlingService $service
                 */
                $service = $sm->get('LogHandling');
                
                $url = $_SERVER['REQUEST_URI'];
                
                $service->log('Routing event', Logger::INFO, array(
                    'url' => $url,
                    
                ), $em);
                
            });
        
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'LogHandling' => function($sm) {
                    $service = new LogHandlingService($sm->get('Config'));
                    
                    return $service;
                },
            ),
        );
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
