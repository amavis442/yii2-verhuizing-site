<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return [
    'auth' => [
        'class' => 'auth\Module',
        'layout' => '//main', // Layout when not logged in yet
        'layoutLogged' => '//main', // Layout for logged in users
        'attemptsBeforeCaptcha' => 3, // Optional
        'superAdmins' => ['patrick@yiiandme.com'], // SuperAdmin users
        'tableMap' => [ // Optional, but if defined, all must be declared
            'User' => 'user',
            'UserStatus' => 'user_status',
            'ProfileFieldValue' => 'profile_field_value',
            'ProfileField' => 'profile_field',
            'ProfileFieldType' => 'profile_field_type',
        ],
    ],
];
