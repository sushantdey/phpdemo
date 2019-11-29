<?php
session_start();

//Initialize var
$username = "";
$errors = array();

//connect to database
$db = mysqli_connect('localhost','root','','demo') or die('unable to connect to database');

//register user
$name = mysqli_real_escape_string($db, $_POST['name']);
$grade = mysqli_real_escape_string($db, $_POST['grade']);
$technology = mysqli_real_escape_string($db, $_POST['technology']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

//form validation
if (empty($name)) {
    array_push($errors, "username cannot be empty");
}
if (empty($grade)) {
    array_push($errors,"grade cannot be empty");
}
if (empty($technology)) {
    array_push($errors,"technology cannot be empty");
}
if (empty($username)) {
    array_push($errors,"username cannot be empty");
}
if (empty($password)) {
    array_push($errors,"password cannot be empty");
}
if ($password != $confirmPassword){
    array_push($errors,"Passwords did not match");
}

//unique username check
$username_check_query = "SELECT username FROM user WHERE username = '$username'";
$results = mysqli_query($db, $username_check_query);
$user = mysqli_fetch_assoc($results);

if ($user && $user['username']===$username) {
    array_push($errors,"username already exists");
}

//register user
if (count($errors)==0) {
    //Encrypt the password
    $encryptPassword = md5($password);
    $insertQuery = "INSERT INTO user (name, grade, technology, username, password) VALUES ('$name','$grade','$technology','$username','$encryptPassword');";
    mysqli_query($db, $insertQuery);
    $_SESSION['username']=$username;
    $_SESSION['success']="You have registered successfully";
    header('location: index.php');
}


//login
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($username) || empty($password)){
        array_push($errors,"Username/password cannot be blank");
    }
    if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password = '$password';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header("location: index.php");
        }
        else {
            array_push($errors,"username or password incorrect");
        }
    }
}
?>