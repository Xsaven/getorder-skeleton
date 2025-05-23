<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware(config('getorder.route.middleware'))
    ->prefix('v1')
    ->as('api.v1.')
    ->group(function () {
        // Include all routes from the v1 directory
    });
