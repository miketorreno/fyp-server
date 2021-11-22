<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\BusinessCategory;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

class BusinessCategoryDimmer extends BaseDimmer
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
        $count = BusinessCategory::count();
        $string = ($count == 1) ? 'Business Category' : 'Business Categories' ;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all business categories',
                'link' => '/admin/business-categories',
            ],
            'image' => 'http://localhost:8000/storage/backgrounds/gilt-desk-trio.jpg',
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
