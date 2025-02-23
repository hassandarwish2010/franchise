<?php

/**
 * Upload image
 *
 * @return name
 */
function uploadImage($upload, $resize_width = 500, $resize_height = 500){
        $filename = rand().time().'.'.$upload->getClientOriginalExtension();
        $filePath = public_path('uploads/').$filename;
        $thumbPath = public_path('uploads/thumbs/').$filename;
        $image = Image::make($upload);
        $thumb = Image::make($upload)->resize($resize_width, $resize_height)->encode($upload->getClientOriginalExtension(), 75);
        $image->save($filePath);
        $thumb->save($thumbPath);
        return $filename;
}

/**
 * Limit with clean string
 *
 * @return string
 */
function clean_limit($string, $limit = 20) {
  return $string = str_limit(html_entity_decode(strip_tags($string)), $limit);
}

//Locales languages
function locales() {
  return [
    'ar' => 'ar',
    'en' => 'en',
  ];
}
//set cookie
function cookie_set($name, $value) {
  return setcookie($name, $value, time()+60*60*24*365*10, "/");
}

//get cookie
function cookie_get($name, $default = 'default') {
  return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
}

function responseJson($status, $message, $data = null)
{
    $response = [

        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];

    return response()->json($response);
}


//Upload video
//function uploadFile($upload){
//  $filename = rand().time().'.'.$upload->getClientOriginalExtension();
//  $filePath = public_path('uploads');
//  $upload->move($filePath, $filename);
//  return $filename;
//}

function notifyByFirebase($title, $body, $tokens, $data = [], $is_notification = false)
{
// https://gist.github.com/rolinger/d6500d65128db95f004041c2b636753a
// API access key from Google FCM App Console
    // env('FCM_API_ACCESS_KEY'));

//    $singleID = 'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd';
//    $registrationIDs = array(
//        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd',
//        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd',
//        'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd'
//    );
    $registrationIDs = $tokens;

// prep the bundle
// to see all the options for FCM to/notification payload:
// https://firebase.google.com/docs/cloud-messaging/http-server-ref#notification-payload-support

// 'vibrate' available in GCM, but not in FCM
    $fcmMsg = array(
        'body' => $body,
        'title' => $title,
        'sound' => "default",
        'color' => "#203E78"
    );
// I haven't figured 'color' out yet.
// On one phone 'color' was the background color behind the actual app icon.  (ie Samsung Galaxy S5)
// On another phone, it was the color of the app icon. (ie: LG K20 Plush)

// 'to' => $singleID ;      // expecting a single ID
// 'registration_ids' => $registrationIDs ;     // expects an array of ids
// 'priority' => 'high' ; // options are normal and high, if not set, defaults to high.
    $fcmFields = array(
        'registration_ids' => $registrationIDs,
        'priority' => 'high',
        'data' => $data,

    );
    if ($is_notification)
    {
        $fcmFields['notification'] = $fcmMsg;
    }

    $headers = array(
        'Authorization: key=' . env('FIREBASE_API_ACCESS_KEY'),
        'Content-Type: application/json'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
