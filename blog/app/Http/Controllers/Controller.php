<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function firebase()
    {
        return view('firebase');
    }
    public function Notifications()
    {
        $token = "edL4ukAZ4vY:APA91bFgz4DFVeP29MqVayuEUvs-7Qix8buB1vI10mthr2sBahe8t7tFxfJ5ogA6FgNw3Wfyo_HyORDzlpKURPpc4m942LdscyOWloX_2Kn2CR1nwEpMxPLI5kViRIT16t_K1sbPbdZQ";
        $from = "AAAAiv9m4t4:APA91bE5KSi36zAnWAgIHIP-MtNHY-8g8v0pK1jN6jNfBsp81vMRkRfmWVuvfPxXw_hqWfqO08X36DVyW9ogaAhra1AlsfD6fXOHrUPqqqzZcIKAqK67C1fdqyOL1KtQ0yUy00_QIJ0s";
        $msg = array(
            'body'  => "Testing Testing",
            'title' => "Hi, From Raj",
            'receiver' => 'erw',
            'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
            'sound' => 'mySound'/*Default sound*/
        );

        $fields = array(
            'to'        => $token,
            'notification'  => $msg
        );

        $headers = array(
            'Authorization: key=' . $from,
            'Content-Type: application/json'
        );
        //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        dd($result);
        curl_close($ch);
    }
}
