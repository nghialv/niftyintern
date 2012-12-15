<?php
  require_once 'config.inc';

  $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset=utf8;';
  global $db;

  // Connect to mysql using PHP's PDO class
  try{
	  $db = new PDO($dsn, DB_USER, DB_PASSWORD);
  }catch (PDOExeption $e){
	  echo'Error:'.$e->getMessage();
	  die();
  }
