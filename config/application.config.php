<?php
return array(
    'modules' => array(
        'Application',
        'SleepBase',
        'SleepProfile',
        'ZfcBase',
        'ZfcUser',
    ),
    'module_listener_options' => array( 
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
