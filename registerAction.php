<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "", "login sys");

if ($conn) {
    echo "Successfully Connected";
} else {
    echo "Connection Faild";
}


$res = mysqli_query($conn, "insert into user values('$user','$pass')");

if ($res) {
    echo "Successfully saved";
} else {
    echo "Save Faild";
}
