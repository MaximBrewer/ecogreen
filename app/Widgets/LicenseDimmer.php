<?php

namespace App\Widgets;

use App\Models\License;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class LicenseDimmer extends AbstractWidget
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
        $count = License::count();
        $string = "Лицензии";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-certificate',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Лицензии",
                'link' => route('voyager.license.index'),
            ],
            'image' => '/assets/images/license_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(License::class));
    }
}
