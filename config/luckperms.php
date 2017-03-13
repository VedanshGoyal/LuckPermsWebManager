<?php

return [
    /***
     * This is all the configuration for the public information,
     * all of this information will be showed to logged in users
     * by default.
     */
    'show_action_log' => false,

    'groups' => [
        'show_permissions' => true,
        'show_members'     => true,
    ],

    'users' => [
        'show_users'            => true,
        'show_user_permissions' => true,
        'show_groups'           => true,
        'show_prefix'           => true,
    ],
];
