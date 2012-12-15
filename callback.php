<?php
  require_once 'common.php';

  global $db;

  session_start();

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
    session_regenerate_id(TRUE);
    $_SESSION["USERID"] = $fb_uid;
    header("Location: main.php");
  }
  else
  {
    $query = 'INSERT INTO user (fb_uid, fb_token) values (?, ?)';
    $sQuery = $db->prepare($query);
    $flag = $sQuery->execute(array($fb_uid, $fb_token));
  }

