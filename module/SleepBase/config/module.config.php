<?php
return array(
    'layout' => 'layout/sleep-layout.phtml', 
    'di' => array(
        'instance' => array(
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options' => array(
                        'script_paths' => array(
                            'SpeckBase' => __DIR__ . '/../view',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
