<?php

namespace SleepBase;

use Zend\EventManager\StaticEventManager;

class Module
{
    public function init($moduleManager)
    {
        $events = StaticEventManager::getInstance();
        $events->attach('bootstrap', 'bootstrap', array($this, 'initializeView'), 100);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function initializeView($e)
    {
        $e->getParam('application')
          ->getLocator()
          ->get('view')
          ->plugin('headTitle')
          ->set('PolySleepers');
    }
}
