<?php
  require_once 'common.php';

  global $db;

  $authURL = 'https://www.facebook.com/dialog/oauth?client_id=' . APP_ID . '&redirect_uri=' . urlencode(CALLBACK) . '&scope=' . APP_SCOPE;

  echo "<a href=$authURL>Login via facebook</a>";

