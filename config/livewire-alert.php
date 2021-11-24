<?php

/*
 * For more details about the configuration, see:
 * https://sweetalert2.github.io/#configuration
 */
return [
    'alert' => [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => true,
        'text' => null,
        'backdrop' => false,
        'timerProgressBar' => true,
        'showCancelButton' => false,
        'showConfirmButton' => false
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'center',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'cancelButtonText' => 'Batal',
        'confirmButtonColor' => '#3085d6',
        'cancelButtonColor' => '#d33',
        'background' => '#fff url(https://sweetalert2.github.io/images/nyan-cat.gif)',
        'backdrop' =>  'rgba(0,0,123,0.4) url(https://sweetalert2.github.io/images/nyan-cat.gif)'
    ]
];
