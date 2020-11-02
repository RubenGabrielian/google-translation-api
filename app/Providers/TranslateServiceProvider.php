<?php

namespace App\Providers;

use App\Http\Controllers\TranslateController;
use App\Repositories\Interfaces\TranslateRepositoryInterface;
use App\Repositories\TranslateRepository;
use App\TranslateLogic;
use Illuminate\Support\ServiceProvider;
use Stichoza\GoogleTranslate\GoogleTranslate;


class TranslateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TranslateRepositoryInterface::class,
            TranslateRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }
}
