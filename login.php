<?php
  require_once 'common.php';
  require_once 'layout/header.php';
?>

<div id="container">
  <div id="main-container">
    <div class="transparent-container">
      <h2>Login</h2>
      <hr>
      <div class="login-with-facebook">
      <?php
        $authURL = 'https://www.facebook.com/dialog/oauth?client_id=' . APP_ID . '&redirect_uri=' . urlencode(CALLBACK) . '&scope=' . APP_SCOPE;
        echo "<a href=$authURL><img alt="login" src="/img/sign_in.png"></a>";
      ?>
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>

</body>
</html>
