<?php
session_start();
include ('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    $_SESSION['username'] = $username;
    header('Location: app/index.php');
}else{
    header('Location: login.php');
}

?>