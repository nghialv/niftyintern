<?php
  require_once 'common.php';

  global $db;

  $result = $db->query("SELECT * FROM user");
  foreach ($result as $row) {
        echo $row["email"] ." , ". $row["fb_uid"] . "<br/>";
    }

  /*
  $resutl = $db->query("INSERT INTO user (email, fb_uid, fb_token, fb_secret)
      VALUES ('test@gmail.com', '5423452354', 'asdfasfasdf', 'asdfas') ");
  var_dump($result);
  */

