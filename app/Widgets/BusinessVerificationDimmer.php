<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use App\Models\BusinessVerification;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

class BusinessVerificationDimmer extends BaseDimmer
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
        $count = BusinessVerification::count();
        $string = ($count == 1) ? 'Business Verification' : 'Business Verifications' ;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-medal-rank-star',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all business verifications',
                'link' => '/admin/business-verifications',
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
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
