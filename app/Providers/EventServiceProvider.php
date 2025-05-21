<?php

declare(strict_types=1);

namespace App\Providers;

use GetOrder\Core\EventServiceProvider as ServiceProvider;

/**
 * EventServiceProvider class
 *
 * This class is responsible for registering event listeners and bootstrapping services.
 *
 * @package App\Providers
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected array $listen = [
        //
    ];
}
