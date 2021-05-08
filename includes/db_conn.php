<?php

$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="iconic_plate";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

//check connection

if (!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
