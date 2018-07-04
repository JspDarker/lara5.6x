<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // use view::composer for master layout : display menu phone|tablet|laptop
        View::composer(['phone.layouts.master'],function($view) {
            $categories = Category::where('id_parent',`is null`)->select('id','name','url_type','icon')->get();

            $view->with('categories',$categories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
