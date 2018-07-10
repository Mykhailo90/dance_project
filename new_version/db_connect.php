<?php
session_start();

  $username = "msarapii";
  $psw = "Inn3315400371";

$servername = "localhost";

//Изменить имя на указанное в файле php.install
$dbname = "chilly";


$db = mysqli_connect($servername, $username, $psw, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
