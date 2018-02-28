<?php

namespace App\Listeners;

use App\Events\UserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 購読するリスナの登録
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserListener@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserListener@onUserLogout'
        );
    }

	/**
     * Handle the event.
     *
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
		//dd($event);
        //
    }

	/**
     * ユーザーログインイベント処理
     */
    public function onUserLogin($event) {
		//dd('onUserLogin');
	}

    /**
     * ユーザーログアウトイベント処理
     */
    public function onUserLogout($event) {
		//dd('onUserLogin');
		
	}
	
}
