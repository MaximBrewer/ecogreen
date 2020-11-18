<?php

namespace App\Widgets;

use App\Models\Chemical;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ChemicalDimmer extends AbstractWidget
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
        $count = Chemical::count();
        $string = "Химикаты";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-lab',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Химикаты",
                'link' => route('voyager.chemicals.index'),
            ],
            'image' => '/assets/images/chemicals_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Chemical::class));
    }
}
