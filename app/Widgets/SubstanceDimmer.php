<?php

namespace App\Widgets;

use App\Models\ActiveSubstance;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SubstanceDimmer extends AbstractWidget
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
        $count = ActiveSubstance::count();
        $string = "Действующее вещество";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-campfire',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Действующее вещество",
                'link' => route('voyager.active-substance.index'),
            ],
            'image' => '/assets/images/substance_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(ActiveSubstance::class));
    }
}
