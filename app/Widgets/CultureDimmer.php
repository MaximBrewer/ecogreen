<?php

namespace App\Widgets;

use App\Models\Fruit;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CultureDimmer extends AbstractWidget
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
        $count = Fruit::count();
        $string = "Культуры";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tree',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Культуры",
                'link' => route('voyager.fruits.index'),
            ],
            'image' => '/assets/images/cultures_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Fruit::class));
    }
}
