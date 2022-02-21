<?php

$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$dbase = 'data';
$koneksi = mysqli_connect($host,$user,$pass,$dbase) or die(mysqli_connect_error());

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$submit = $_POST['submit'];

$query = "INSERT INTO data VALUES($name,$email,$subject,$message,$submit)";

mysqli_query($koneksi,$query);

?>

