<?php

namespace App\Providers;

use App\Models\PengaturanWeb;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Config;
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
            $PengaturanWeb = PengaturanWeb::all()?->first()?->toArray();
            if ($PengaturanWeb) {
                foreach ($PengaturanWeb as $key => $val) {
                    Config::set('web.' . $key, $val);
                }
            }
        } catch (QueryException $e) {
            error_log($e->getMessage());
        }
    }
}
