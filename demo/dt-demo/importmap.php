<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 *
 * This file has been auto-generated by the importmap commands.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    'bootstrap' => [
        'version' => '5.3.2',
    ],
    '@popperjs/core' => [
        'version' => '2.11.8',
    ],
    'bootstrap/dist/css/bootstrap.min.css' => [
        'version' => '5.3.2',
        'type' => 'css',
    ],
    'datatables.net-bs5' => [
        'version' => '1.13.6',
    ],
    'jquery' => [
        'version' => '3.7.1',
    ],
    'datatables.net' => [
        'version' => '1.13.6',
    ],
    'datatables.net-bs5/css/dataTables.bootstrap5.min.css' => [
        'version' => '1.13.6',
        'type' => 'css',
    ],
    'axios' => [
        'version' => '1.6.0',
    ],
    'datatables.net-searchpanes-bs5' => [
        'version' => '2.2.0',
    ],
    'datatables.net-searchpanes-bs5/css/searchPanes.bootstrap5.min.css' => [
        'version' => '2.2.0',
        'type' => 'css',
    ],
    'html-prettify' => [
        'version' => '1.0.7',
    ],
    'datatables.net-dt' => [
        'version' => '1.13.6',
    ],
    'datatables.net-dt/css/jquery.dataTables.min.css' => [
        'version' => '1.13.6',
        'type' => 'css',
    ],
    'simple-datatables' => [
        'version' => '8.0.0',
    ],
    'simple-datatables/dist/style.min.css' => [
        'version' => '8.0.0',
        'type' => 'css',
    ],
];
