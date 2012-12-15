<?php
  define('DB_NAME', getenv('C4SA_MYSQL_DB'));
  define('DB_USER', getenv('C4SA_MYSQL_USER'));
  define('DB_PASSWORD', getenv('C4SA_MYSQL_PASSWORD'));
  define('DB_HOST', getenv('C4SA_MYSQL_HOST'));
  define('APP_SCOPE', 'user_about_me, email,read_stream, user_photos, offline_access');
