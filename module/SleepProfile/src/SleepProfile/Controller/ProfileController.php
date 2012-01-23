<?php

namespace SleepProfile\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\Form\Form,
    Zend\Stdlib\ResponseDescription as Response,
    ZfcUser\Service\User as UserService,
    ZfcUser\Module as ZfcUser;

class ProfileController extends ActionController
{
    /**
     * @var UserService
     */
    protected $userService;

    public function indexAction()
    {
        $userService = $this->getUserService();
        $e           = $this->getEvent();
        $routeMatch  = $e->getRouteMatch();
        $username    = $routeMatch->getParam('username');
        $user        = $userService->getByUsername($username);

        if (!$user) {
            $response = $this->getResponse();
            $response->setStatusCode(404);
            return array(
                'error' => 'User not found',
            );
        }

        return array('user' => $user);
    }

    public function getUserService()
    {
        return $this->userService;
    }

    public function setUserService(UserService $userService)
    {
        $this->userService = $userService;
        return $this;
    }
}
