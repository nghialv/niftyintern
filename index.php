<?php
  echo "hello world";

  $config = parse_ini_file('config.ini', true);
  $con = mysql_connect($config[ip], $config[username], $config[password]);
  if(!$con){
    echo('could not connect'.mysql_error());
  }

  $db_select = mysql_select_db($config[dbname], $con);
  echo $db_select;

