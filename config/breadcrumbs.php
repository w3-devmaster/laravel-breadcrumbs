<?php

return [
    /**
     * Choose CSS Framework for your breadcrumbs
     * Avalible : bootstrap4, bootstrap5, tailwind
     *
     */

    'framework' => 'bootstrap5',

    /**
     * Mode CDN or Vendor For Framework
     * Mode : cdn,vendor
     *
     */
    'lib' => 'cdn',

    /**
     * URL or Vendor for Framework
     */
    'vendor' => [

        'bootstrap4' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
            ],
            'script' => [
                'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
            ]
        ],


        'bootstrap5' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
            ],
            'script' => [
                'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
            ]
        ],


        'tailwind' => [
            'css' => [

            ],
            'script' => [
                'https://cdn.tailwindcss.com',
            ]
        ],
    ]
];
