<?php

namespace Application\Di;

use Zend\Di\Locator;

class Di implements Locator
{
    protected $index = array();

    public function get($name, array $params = array())
    {
        if (isset($this->index[$name])) {
            return $this->index[$name];
        }

        switch ($name) {

            case 'index':
                $object = new \Application\Controller\IndexController;
                break;

            case 'error':
                $object = new \Application\Controller\ErrorController;
                break;

            case 'view':
                $object = new \Zend\View\PhpRenderer;
                $object->setResolver('Zend\View\TemplatePathStack', array(
                    'script_paths' => array(
                        'application' => __DIR__ . '/../../../views',
                    ),
                ));
                break;

            default:
                $name = '\\' . $name;
                $object = new $name;
                break; 

        }

        return $this->setIndex($name, $object);
    }

    protected function setIndex($name, $object)
    {
        $this->index[$name] = $object;
        return $object;
    }
}
