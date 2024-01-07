<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "", "login sys");

if ($conn) {
    echo "Successfully Connected";
} else {
    echo "Connection Faild";
}


$res = mysqli_query($conn, "select * from user where username='$user' and pass='$pass'");
$b = false;
while (mysqli_fetch_array($res)) {
    $b = true;
}


if ($b) {
    echo "Success";
    header("location:dashBoad.html");
} else {
    echo "<script>";
    echo "alert('Wrong User');";

    echo "window.location='login.html';";
    echo "</script>";
}
