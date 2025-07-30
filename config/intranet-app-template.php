<?php

// config for Hwkdo/IntranetAppTemplate
return [
'roles' => [
        'admin' => [
            'name' => 'App-Template-Admin',
            'permissions' => [
                'see-app-template',
                'manage-app-template',
            ]
        ],
        'user' => [
            'name' => 'App-Template-Benutzer',
            'permissions' => [
                'see-app-template',                
            ]
        ],
];
