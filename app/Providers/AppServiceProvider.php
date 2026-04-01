<?php

namespace App\Providers;

use App\Models\WhatsappSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            $setting = WhatsappSetting::first();
            View::share('whatsappNumber', $setting?->whatsapp_number ?? '18738935813');
        } catch (\Exception $e) {
            View::share('whatsappNumber', '18738935813');
        }
    }
}
