<?php

$config = [

    /*
     * Views that will be generated. If you wish to add your own view,
     * make sure to create a template first in the
     * '/resources/views/template/views' directory.
     * */
    'views' => [
        'index',
        'edit',
        'show',
        'create',
    ],

    /*
     * Directory containing the templates
     * If you want to use your custom templates, specify them here
     * */
    'templates' => 'template.simple-templates',

];

    /*
     * Layout template used when generating views
     * */
    $config['layout'] = $config['templates'].'.layout.app';

return $config;