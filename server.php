<?php
session_start();

//Initialize var
$username = "";

//connect to database
$db = mysqli_connect('localhost','root','','demo') or die('unable to connect to database');

//register user
$name = mysqli_real_escape_string($db, $_POST['user']);
$grade = mysqli_real_escape_string($db, $_POST['grade']);
$technology = mysqli_real_escape_string($db, $_POST['technology']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);
?>