<?php

namespace App\Traits;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for saving Workorder.
|
*/

trait SendNotification
{

    public function sendNotification($message,$reciver_id)
    {
        $firebaseToken = User::find($reciver_id)->device_tokken;
        $SERVER_API_KEY = '';
        // dd(User::find($reciver_id));


        $data = [
            "registration_ids" => [$firebaseToken],
            "notification" => [
                "title" => "message received",
                "body" => $message,
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
        return 0;
    }


}
