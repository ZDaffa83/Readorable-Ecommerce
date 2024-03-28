<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /* 
    Gunakan kodingan bwah ini jika website anda ingin di host ngrox
     public function boot()
    {
        if(config('app.env') === 'local' || strpos(request()->headers->get('host'), 'ngrok.io') !== false) {
            URL::forceScheme('https');
        } else {
            URL::forceScheme('http'); // Untuk server web biasa, tetap gunakan HTTP
        }
        Schema::defaultStringLength(191);
    } 
    use Illuminate\Support\Facades\URL;
    
    Gunakan kodingan ini jika website hanya dijalankan sebagai artisan serve atau tidak di host tunnel
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    */
}
