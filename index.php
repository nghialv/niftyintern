<?php
  require_once 'common.php';

  global $db;

  define('APP_ID', '498433533511109');
  define('APP_SECRET', '17f52538817f5d63f2a06dac290e187d');
  define('CALLBACK', 'http://cu692uo-ao9-app000.c4sa.net/callback.php');

  $authURL = 'http://www.facebook.com/dialog/oauth?client_id='. APP_ID . '&rediret_uri=' . urlencode(CALLBACK);

  header("Location: " . $authURL);

  /*
  $result = $db->query("SELECT * FROM user");
  foreach ($result as $row) {
        echo $row["email"] ." , ". $row["fb_uid"] . "<br/>";
    }
  */

  /*
  $resutl = $db->query("INSERT INTO user (email, fb_uid, fb_token, fb_secret)
      VALUES ('test@gmail.com', '5423452354', 'asdfasfasdf', 'asdfas') ");
  var_dump($result);
  */

