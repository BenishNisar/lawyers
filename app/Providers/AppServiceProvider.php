<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $notifications = Contact::latest()->take(5)->get(); // last 5
            $view->with('notifications', $notifications);
        });
    }
}
