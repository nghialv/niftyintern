<?php
  require_once 'common.php';
  require_once '/layout/header.php';
?>

<div id="container">
  <div id="main-container">
  <?php
    $authURL = 'https://www.facebook.com/dialog/oauth?client_id=' . APP_ID . '&redirect_uri=' . urlencode(CALLBACK) . '&scope=' . APP_SCOPE;
    echo "<a href=$authURL>Login via facebook</a>";
  ?>
  </div>
</div>

</body>
</html>