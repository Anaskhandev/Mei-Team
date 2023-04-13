<?php

require_once './vendor/autoload.php';

$APP_SECRET = '138b9fd3a8c1df0664c7b83f422d0b70';
$APP_ID = '1252583408671556';
$ACCESS_TOKEN = 'EAARzN80gG0QBAJHuqZA6ZBFbCJcNohmrqU5Jas70N4JXozcfLioaVNPCnn9JWEcC0aZC2CE8zipHXNVJFT4tTzU2pNFBjSL72HwSt8M17rhCZBSDinlen7blclDJdLivXV97vuXIIIrfaWaF6ZANiTQrOmoh2mZC3egdY3u4l5MQzHh0bVCUwIPCvhYQZCYhLEiPoyZBIuDwbxMWtwMkvjZCQlLraZB7I9r3DxIomEIOfA6gZDZD';


$caption = 'caption,media_type,media_url,username';
$limit = 6;

$string = "https://graph.instagram.com/me/media?fields={$caption}&access_token={$ACCESS_TOKEN}&limit={$limit}";
$json = file_get_contents($string);
$result = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
echo $result;


// $APP_SECRET = '3709be64c2f4ada5c077252079bdd927';
// $APP_ID = '900309834321646';

// use Instagram\FacebookLogin\FacebookLogin;
// use Instagram\AccessToken\AccessToken;

// $config = array( // instantiation config params
//     'app_id' => $APP_ID, // facebook app id
//     'app_secret' => $APP_SECRET, // facebook app secret
// );

// // uri facebook will send the user to after they login
// $redirectUri = 'http://localhost/mei_team/insta.php';
// if (isset($_GET['code'])) {


//     // instantiate our access token class
//     $accessToken = new AccessToken($config);

//     // exchange our code for an access token
//     $newToken = $accessToken->getAccessTokenFromCode($_GET['code'], $redirectUri);

//     if (!$accessToken->isLongLived()) { // check if our access token is short lived (expires in hours)
//         // exchange the short lived token for a long lived token which last about 60 days
//         $newToken = $accessToken->getLongLivedAccessToken($newToken['access_token']);
//     }
//     echo '<pre>';
//     echo print_r($newToken);
//     echo '</pre>';
// } else {
//     $permissions = array( // permissions to request from the user
//         'instagram_basic',
//         'instagram_content_publish',
//         'instagram_manage_insights',
//         'instagram_manage_comments',
//         'pages_show_list',
//         'ads_management',
//         'business_management',
//         'pages_read_engagement'
//     );

//     // instantiate new facebook login
//     $facebookLogin = new FacebookLogin($config);

//     // display login dialog link
//     echo '<a href="' . $facebookLogin->getLoginDialogUrl($redirectUri, $permissions) . '">' .
//         'Log in with Facebook' .
//         '</a>';
// }


// use Instagram\AccessToken\AccessToken;

// $config = array( // instantiation config params
//     'value' => $ACCESS_TOKEN, // access token to debug
//     'access_token' => $ACCESS_TOKEN // an admin or developer access token for the app
// );

// // instantiate our access token class
// $accessToken = new AccessToken($config);

// // debug the token
// $debug = $accessToken->debug();
