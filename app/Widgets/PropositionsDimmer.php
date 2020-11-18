<?php

namespace App\Widgets;

use App\Models\Proposition;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PropositionsDimmer extends AbstractWidget
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
        $count = Proposition::count();
        $string = "Заявки";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-thumb-tack',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Заявки",
                'link' => route('voyager.propositions.index'),
            ],
            'image' => '/assets/images/propositions_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Proposition::class));
    }
}
