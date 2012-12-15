<?php
  define('DB_NAME', getenv('C4SA_MYSQL_DB'));
  define('DB_USER', getenv('C4SA_MYSQL_USER'));
  define('DB_PASSWORD', getenv('C4SA_MYSQL_PASSWORD'));
  define('DB_HOST', getenv('C4SA_MYSQL_HOST'));

  define('APP_ID', '498433533511109');
  define('APP_SECRET', '17f52538817f5d63f2a06dac290e187d');
  define('CALLBACK','http://cu692uo-ao9-app000.c4sa.net/callback.php');
  define('APP_SCOPE', 'user_about_me,email,read_stream,user_photos,offline_access');
