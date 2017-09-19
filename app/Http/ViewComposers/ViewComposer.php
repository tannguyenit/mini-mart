<?php

namespace App\Http\ViewComposers;

use App\Models\Cat;
use App\Models\Slide;
use Illuminate\Contracts\View\View;

class ViewComposer
{
    public function compose(View $view)
    {
        $this->dataView['arCats']       = Cat::all()->toArray();
        $this->dataView['arCat_header'] = Cat::where('parent_id', 0)->take(5)->get()->toArray();
        $this->dataView['arSlide']      = Slide::where('position', 1)->take(4)->get()->toArray();
        $view->with($this->dataView);
    }
}
