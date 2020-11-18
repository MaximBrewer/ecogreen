<?php

namespace App\Widgets;

use App\Models\ChatRoom;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ChatDimmer extends AbstractWidget
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
        $count = ChatRoom::count();
        $string = "Чаты";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-chat',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "Чаты",
                'link' => route('voyager.chat-room.index'),
            ],
            'image' => '/assets/images/chat-rooms_bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(ChatRoom::class));
    }
}
