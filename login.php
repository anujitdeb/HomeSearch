<?php session_start();
$username = $_POST['username'];
$password  = $_POST['password'];


$link = mysqli_connect('localhost', 'root', '', 'home');

$query = mysqli_query($link, "select * from users where username = '$username'");

$data = mysqli_fetch_assoc($query);


if (empty($data)) {
    mysqli_query($link, "insert into users (username, password) values('$username', '" . md5($password) . "')");
    $_SESSION['success'] = "Registered successfully.";
}
elseif($data['password'] != md5($password)){
    $_SESSION['error'] = "Invalid credential given!";
}
else{
    $_SESSION['isLogged'] = true;
}


header("location: index.php");