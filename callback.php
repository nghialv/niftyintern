<?php
  define('APP_ID', '498433533511109');
  define('APP_SECRET', '17f52538817f5d63f2a06dac290e187d');
  define('CALLBACK', 'http://cu692uo-ao9-app000.c4sa.net/callback.php');

  echo("THIS IS CALLBACK");

  $code = $_REQUEST['code'];
  $token_url = 'https://graph.facebook.com/oauth/access_token?client_id='.
    APP_ID . '&redirect_uri=' . urlencode(CALLBACK) . '&client_secret='.
    APP_SECRET . '&code=' . $code;

  echo($code);

