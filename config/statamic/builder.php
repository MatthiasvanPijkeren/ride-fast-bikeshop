<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Register Blueprints
    |--------------------------------------------------------------------------
    |
    | Here you can register the blueprints that you want to use in your
    | Statamic site.
    |
    */
    'blueprints' => [
        /*
        |--------------------------------------------------------------------------
        | Collection Blueprints
        |--------------------------------------------------------------------------
        |
        | Here you can register the blueprints that you want to use for your
        | collections, taxonomies, and globals.
        |
        */
        'collections.pages' => [
            'home' => App\Blueprints\Pages\HomePageBlueprint::class,
            'content' => App\Blueprints\Pages\ContentPageBlueprint::class,
            'archive' => App\Blueprints\Pages\ArchivePageBlueprint::class,
            'contact' => App\Blueprints\Pages\ContactPageBlueprint::class,
            'page' => App\Blueprints\Pages\PageBlueprint::class,
        ],
        'taxonomies.tags' => [
            // 'tag' => App\Blueprints\TagBlueprint::class,
        ],
        'globals' => [
            'footer' => App\Blueprints\Globals\FooterBlueprint::class,
        ],
        'navigation' => [
            'main' => App\Blueprints\Navigations\MainNavigationBlueprint::class,
        ],
        'assets' => [
            // 'assets' => App\Blueprints\AssetsContainerBlueprint::class,
        ],
        'user' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Fieldsets
    |--------------------------------------------------------------------------
    |
    | Here you can register the fieldsets that you want to use in your
    | blueprints.
    |
    */
    'fieldsets' => [
        // \App\Fieldsets\LogoWithIntroductionFieldset::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Collections
    |--------------------------------------------------------------------------
    |
    | Here you can register the collections that you want to use in your
    | Statamic site.
    |
    */
    'collections' => [
        App\Collections\Pages::class,
        App\Collections\Brands::class,
        App\Collections\Crew::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you can register the taxonomies that you want to use in your
    | Statamic site.
    |
    */
    'taxonomies' => [
        // App\Taxonomies\Tags::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Globals
    |--------------------------------------------------------------------------
    |
    | Here you can register the globals that you want to use in your
    | Statamic site.
    |
    */
    'globals' => [
        // App\Globals\Footer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Sites
    |--------------------------------------------------------------------------
    |
    | Here you can register the sites that you want to use in your
    | Statamic site.
    |
    */
    'sites' => [
        // App\Sites\Blog::class,
    ],
];
