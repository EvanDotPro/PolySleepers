<?php

namespace Application;

use Zend\Mvc\Bootstrap as ZendBootstrap,
    Zend\Mvc\AppContext;

class Bootstrap extends ZendBootstrap
{
    /**
     * Sets up the locator based on the configuration provided
     * 
     * @param  AppContext $application 
     * @return void
     */
    protected function setupLocator(AppContext $application)
    {
        $application->setLocator(new \Application\Di\Di);
    }
}
