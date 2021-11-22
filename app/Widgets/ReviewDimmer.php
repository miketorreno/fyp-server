<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\Review;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

class ReviewDimmer extends BaseDimmer
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
        $count = Review::count();
        $string = ($count == 1) ? 'Review' : 'Reviews' ;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pen',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all reviews',
                'link' => '/admin/reviews',
            ],
            'image' => 'http://localhost:8000/storage/backgrounds/pepper-and-pen.jpg',
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
