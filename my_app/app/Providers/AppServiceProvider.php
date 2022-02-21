<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\ModelSmartphoneController;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrapFive();
/*         $brands = SmartphoneController::getAllBrands();
        $models = ModelSmartphoneController::getPhoneModels();
        Schema::defaultStringLength(191);
        View::share(['listOfBrands' => $brands, 'listOfModels' => $models]); */
    }
}