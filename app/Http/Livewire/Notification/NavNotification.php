<?php

namespace App\Http\Livewire\Notification;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavNotification extends Component
{
    public $unreadNotifications;
    public $numNewNotifications = 0;
    public $userId;
    public function getListeners()
    {
        return [
            "echo-private:notification.{$this->userId},.NotificationsEvent" => 'incrementNotificationCount',
        ];
    }

    public function mount()
    {
      if (Auth::check()) {
          $this->userId = Auth::user()->id;
          $this->unreadNotifications = Auth::user()->unreadNotifications;
          $this->numNewNotifications = Auth::user()->unreadNotifications->count();
      }
    }

    public function incrementNotificationCount()
    { dd('1');
        if($this->numNewNotifications != Auth::user()->unreadNotifications->count())
        {
            $this->incrementNotificationRefresh();
            $this->emit('haveNotif');
        }
    }

    public function incrementNotificationRefresh() {
        $this->numNewNotifications = Auth::user()->unreadNotifications->count();
            $this->unreadNotifications = Auth::user()->unreadNotifications;
    }

    public function render()
    {
        return view('livewire.notification.nav-notification');
    }
}
