<?php
return array(
    'routes' => array(
        'profile' => array(
            'type' => 'Segment',
            'options' => array(
                'route' => '/:username',
                'defaults' => array(
                    'controller' => 'sleep-profile',
                    'action' => 'index',
                ),
            ),
        ),
    ),
    'di' => array(
        'instance' => array(
            'alias' => array(
                'sleep-profile' => 'SleepProfile\Controller\ProfileController',
            ),
            'sleep-profile' => array(
                'parameters' => array(
                    'userService' => 'zfcuser_user_service',
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options' => array(
                        'script_paths' => array(
                            'SleepProfile' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
