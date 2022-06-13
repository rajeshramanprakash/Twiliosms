<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class message extends Controller
{
    //

    public function sms(Request $request)
    {
        try {
            $account_sid = env('TWILIO_SID');
            $account_token = env('TWILIO_TOKEN');
            $phone_number = env('TWILIO_FROM');

            $client = new Client($account_sid, $account_token);
            $client->messages->create('+91' . $request->phone_number, [
                'from' => $phone_number,
                'body' => $request->message
            ]);
            return "Message Send ....";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
