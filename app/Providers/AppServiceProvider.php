<?php

namespace App\Providers;

use App\Models\MetaField;
use Artesaos\SEOTools\Facades\SEOMeta;
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
        $seo = MetaField::where('route', request()->getPathInfo())->first();
        if ($seo) {
            if ($seo->title) {
                SEOMeta::setTitle($seo->title);
            }
            if ($seo->description) {
                SEOMeta::setDescription($seo->description);
            }
            if ($seo->keywords) {
                SEOMeta::addKeyword($seo->keywords);
            }
        }
    }
}
