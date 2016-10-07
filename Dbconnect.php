<?php

  $DBhost = "localhost";
  $DBuser = "root";
  $DBpass = "";
  $DBname = "hornbillbookshop";
  
  $DBconnect = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);    
     if ($DBconnect->connect_errno) {
         die("ERROR : -> ".$DBconnect->connect_error);
     }
 
?>

