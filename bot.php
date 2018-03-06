<?php

require_once(__DIR__ . '/config.php');

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth(
  CONSUMER_KEY,
  CONSUMER_SECRET,
  ACCESS_TOKEN,
  ACCESS_TOKEN_SECRET);

// $content = $connection->get("account/verify_credentials");

// var_dump($content);
$media = $connection->upload("media/ubload", [
    'media' => __DIR__ . '/tw.jpg'
  ]);

if ($connection->getLastHttpCode() == 200) {
  //tweet posted succesfully
  echo 'Success!' . PHP_EOL;
}else {
  //Handle error case
  echo 'Error!' . $media->errors[0]->message . PHP_EOL;
}
  
// $statues = $connection->post("statuses/update", [
//   "status" => "ボットからのテストツイート。画像添付 ". date('H:i:s'),

//   ]);

// if ($connection->getLastHttpCode() == 200) {
//   echo 'Succes!' . PHP_EOF;
//     // Tweet posted succesfully
// } else {
//     // Handle error case
//   echo 'Error' . PHP_EOF;
// }
// ?>