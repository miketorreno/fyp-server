<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\Business;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

class BusinessDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Business::count();
        $string = ($count == 1) ? 'Business' : 'Businesses' ;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-shop',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all businesses',
                'link' => '/admin/businesses',
            ],
            'image' => 'http://localhost:8000/storage/backgrounds/Our_Planet_Scenes_1920X1200_006.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
