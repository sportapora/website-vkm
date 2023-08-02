<?php

namespace App\Providers;

use App\Models\Acara;
use App\Models\QiuDao;
use App\Models\User;
use App\Observers\AcaraObserver;
use App\Observers\AnggotaObserver;
use App\Observers\QiuDaoObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        User::observe(AnggotaObserver::class);
        Acara::observe(AcaraObserver::class);
        QiuDao::observe(QiuDaoObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
