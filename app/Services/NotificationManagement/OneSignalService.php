<?php

namespace App\Services\NotificationManagement;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class OneSignalService{


    public function sendNewNotification(array $data)
    {
        $client = new Client();
        // Set your OneSignal App ID and REST API Key
        $appId = config('services.onesignal_app_id.onesignal_id');
        // $apiKey = 'MTI2NjBjZWQtMzA4NC00M2M0LWExYjItZjY4YTEzOGRiZTAy';
        $message ='';
        // Set the notification parameters
        $notification = [
            'app_id' => $appId,
            'contents' => ['en' => $data['discription']],
            'included_segments' => ['All'],
            'headings' => ['en' => $data['title']],
            'ios_sound' => 'ringnot.wav', // Sound file name for iOS
            'android_sound' => 'ringnot', // Sound file name for Android
            'content_available' => true,
            'ios_attachments' => array('id' => 'swap-icon', 'url' => $data['image']),
            'mutable_content' => true,
            'ios_badgeType' => 'Increase',
            'ios_badgeCount' => 1,
            'android_attachments' => array("id" => "ios_picture","image_url" => $data['image']),
            'android_large_icon' => $data['image'],
        ];
        // iamge = 'https://img.onesignal.com/tmp/2055b5d4-d8bc-4c2b-9c12-db1743e55969/McT9tY0eQHKa6Dnfb4Cv_MicrosoftTeams-image%20(8).png'
        // Send the notification
        $response = $client->post('https://onesignal.com/api/v1/notifications', [
            'headers' => [
                'Authorization' => 'Basic ' . $data['api_key'],
                'Content-Type' => 'application/json',
            ],
            'json' => $notification,
        ]);
        // Handle the response
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        if($statusCode == 200){ $message = 'success'; }else{ $message ='failure'; }
        return $message;

    }


}
