<?php

namespace App\Listeners;

use App\Events\NewsBroadcastEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\CurrentNewsNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class NewsBroadcastNotificationListener
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
     * Handle the event.
     *
     * @param  NewsBroadcastEvent  $event
     * @return void
     */
    public function handle(NewsBroadcastEvent $event)
    {
      $offerData = [
        'title'   => $event->data,
        'action'  => url('/'),
        'line'    => 'Thank you for using our application!'
      ];

      $users = User::all();


      foreach ($users as $user) {
          Notification::send($user, new CurrentNewsNotification($offerData));
          event(new \App\Events\NotificationsEvent(1));
      }
    }
}
