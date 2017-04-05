<?php

namespace App\Providers;

use App\Models\Cat;
use App\Models\Slide;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    protected $arCats;
    public function boot()
    {

        // public function __construct()
        {
            $this->arCats = Cat::all()->toArray();
            $this->arCat_header = Cat::where('parent_id', 0)->take(5)->get()->toArray();
            $this->arSlide = Slide::where('position', 1)->take(4)->get()->toArray();
            view()->share(['arCats' => $this->arCats, 'arCat_header' => $this->arCat_header, 'arSlide' => $this->arSlide]);
        }
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
