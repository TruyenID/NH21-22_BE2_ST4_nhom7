<?php

namespace App\Providers;
use App\Models\Protype;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        //Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        view()->composer('*',function ($view){
            $view->with([
                $protype = Protype::where('type_id','<',1)->get(),
            ]);
        });
    }
}
