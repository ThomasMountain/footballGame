<?php

namespace App\Listeners;

use App\Events\UserEvent;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserEventListener
{
    public $user;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  UserEvent $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        //
    }

    public function onUserLogin($event)
    {
        $user = Auth::User();

        $user->last_login = Carbon::now();

        $user->save();
    }

    public function subscribe($events)
    {
        $events->listen(
            'auth.login',
            'App\Listeners\UserEventListener@onUserLogin'
        );
    }
}