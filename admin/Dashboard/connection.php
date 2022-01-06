<?php
$dbuser = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cms';

$connection = mysqli_connect('localhost','root','','cms');

if(mysqli_connect_error()){
	die('Database connection failrd'.mysqli_connect_error());
}
?>