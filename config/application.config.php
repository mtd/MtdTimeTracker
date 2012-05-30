<?php
return array(
    'modules' => array(
        'Application',
        'ZfcUser',
        'ZfcBase',
        'ZfcAcl',
        'ZfcUserAcl',
    ),
    'module_listener_options' => array( 
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
        ),
    ),
    'ZfcAcl' => array(
        'options' => array(
            'enable_guards' => array(
                'route'     => true,
                'event'     => false,
                'dispatch'  => true,
            ),
        ),
    ),
);
