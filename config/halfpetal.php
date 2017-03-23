<?php

return [
    'luckperms' => [
        'public_info' => env('LPWM_PUBLIC_INFO', true),
        'info'        => [
            'action_log'         => false,
            'groups'             => true,
            'group_permissions'  => true,
            'group_meta'         => true,
            'blacklisted_groups' => ['administrator'],
            'user_permissions'   => true,
            'blacklisted_users'  => ['notch'],
        ],
    ],

    'footer' => [
        'show_copyright' => env('HALFPETAL_COPYRIGHT', true),
        'show_github'    => env('HALFPETAL_GITHUB', true),
        'show_social'    => env('HALFPETAL_SOCIAL', true),
    ],
];
