<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\Vote;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

class VoteDimmer extends BaseDimmer
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
        $count = Vote::count();
        $string = ($count == 1) ? 'Vote' : 'Votes' ;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-thumbs-up',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all votes',
                'link' => '/admin/votes',
            ],
            'image' => 'http://localhost:8000/storage/backgrounds/Screenshot from 2017-05-26 18-20-11.png',
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
