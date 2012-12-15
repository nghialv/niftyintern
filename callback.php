<?php
  require_once 'common.php';

  global $db;

  define('APP_ID', '498433533511109');
  define('APP_SECRET', '17f52538817f5d63f2a06dac290e187d');
  define('CALLBACK', 'http://cu692uo-ao9-app000.c4sa.net/callback.php');

  $code = $_REQUEST['code'];
  $token_url = 'https://graph.facebook.com/oauth/access_token?client_id='.
    APP_ID . '&redirect_uri=' . urlencode(CALLBACK) . '&client_secret='.
    APP_SECRET . '&code=' . $code;

  $response = file_get_contents($token_url);
  $params = null;
  parse_str($response, $params);

  $graph_url = "https://graph.facebook.com/me?access_token=" . $params['access_token'];
  $user = json_decode(file_get_contents($graph_url));

  $fb_uid = $user->id;
  $fb_token = $params['access_token'];

  $result = $db->query("SELECT * FROM user  WHERE fb_uid=$fb_uid");

  if($result->rowCount() != 0){
    echo "Already exits";

  }
  else
  {
    $query = 'INSERT INTO user (fb_uid, fb_token) values (?, ?)';
    $sQuery = $db->prepare($query);
    $flag = $sQuery->execute(array($fb_uid, $fb_token));
  }
