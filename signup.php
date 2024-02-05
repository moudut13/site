<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection



$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$pass = md5($password);


$conn->query("INSERT INTO admin (name,username,email,password)
VALUES ('$name','$username','$email','$pass')");
