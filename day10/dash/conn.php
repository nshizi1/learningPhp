<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "intern_workTwo");
if(!isset($_SESSION["userName"])) {
    echo "<script>alert('You must logIn first');
    window.location.href='../index.php';</script>";
}