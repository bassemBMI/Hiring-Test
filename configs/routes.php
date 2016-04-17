<?php

return [
    'routing.routes' => [
        
        // CA Products
        'caproducts' => [
            'pattern' => '/products/ca',
            'controller' => 'SSENSE\HiringTest\Controllers\ProductsController::caProductsAction',
            'method' => ['get']
        ],
        // Montreal weather
        'mtlweather' => [
            'pattern' => '/weather/mtl',
            'controller' => 'SSENSE\HiringTest\Controllers\WeatherController::mtlWeatherAction',
            'method' => ['get']
        ],
        // Homepage
        'homepage' => [
            'pattern' => '/',
            'controller' => 'SSENSE\HiringTest\Controllers\HomepageController::displayAction',
            'method' => ['get']
        ],
        
        // other pages ...
    ]
];
