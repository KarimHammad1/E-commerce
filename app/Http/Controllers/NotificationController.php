<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Ladumor\OneSignal\OneSignal;

class NotificationController extends Controller
{
    public function sendPush(){
        $fields['include_player_ids'] = ['xxxxxxxx-xxxx-xxx-xxxx-yyyyyyyyy'];
        $message = 'hey!! this is test push.!';
        OneSignal::sendPush($fields, $message);
    }
    public function getNotifications(){
        return OneSignal::getNotifications();
    }
    public function getNotification($notificationID){
        return OneSignal::getNotification($notificationID);
    }
    public function getDevices(){
        return OneSignal::getDevices();
    }
    public function getDevice($deviceID){
        return OneSignal::getDevices($deviceID);
    }

}
