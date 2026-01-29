<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Shop Theme Configuration
    |--------------------------------------------------------------------------
    |
    | All the configurations are related to the shop themes.
    |
    */

    'shop-default' => 'srp-default',

    'shop' => [
        'srp-default' => [
            'name' => 'SRP Default',
            'assets_path' => 'public/vendor/srp/theme',
            'views_path' => 'packages/Srp/Theme/resources/views/shop',

            'vite' => [
                'hot_file' => 'srp-default-vite.hot',
                'build_directory' => 'vendor/srp/theme/build',
                'package_assets_directory' => 'src/Resources/assets',
            ],
        ],

        'default' => [
            'name' => 'Bagisto Default',
            'assets_path' => 'public/themes/shop/default',
            'views_path' => 'resources/themes/default/views',

            'vite' => [
                'hot_file' => 'shop-default-vite.hot',
                'build_directory' => 'themes/shop/default/build',
                'package_assets_directory' => 'src/Resources/assets',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Theme Configuration
    |--------------------------------------------------------------------------
    |
    | All the configurations are related to the admin themes.
    |
    */

    'admin-default' => 'default',

    'admin' => [
        'default' => [
            'name' => 'Default',
            'assets_path' => 'public/themes/admin/default',
            'views_path' => 'resources/admin-themes/default/views',

            'vite' => [
                'hot_file' => 'admin-default-vite.hot',
                'build_directory' => 'themes/admin/default/build',
                'package_assets_directory' => 'src/Resources/assets',
            ],
        ],
    ],
];
