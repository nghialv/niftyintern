<?php
  define('DB_NAME', getenv('C4SA_MYSQL_DB'));
  define('DB_USER', getenv('C4SA_MYSQL_USER'));
  define('DB_PASSWORD', getenv('C4SA_MYSQL_PASSWORD'));
  define('DB_HOST', getenv('C4SA_MYSQL_HOST'));

  $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset=utf8;';
  global $db;

  // Connect to mysql using PHP's PDO class
  try{
	  $db = new PDO($dsn, DB_USER, DB_PASSWORD);
  }catch (PDOExeption $e){
	  echo'Error:'.$e->getMessage();
	  die();
  }
