<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eSHURI | Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home logIn sign">
    <main>
        <h3>Register Account</h3>
        <form class="form" action="" method="POST">
            <div class="brand">
                <img src="./images/logo.png" alt="">
            </div>
            <div class="input">
                <label>Names:</label>
                <input type="text" required name="names">
            </div>
            <div class="input">
                <label>Username:</label>
                <input type="text" required name="username">
            </div>
            <div class="input">
                <label>Password:</label>
                <div class="passwordDiv">
                    <input type="password" id="password" name="password" required>
                    <span id="toggler" draggable="false">Show</span>
                </div>
            </div>
            <div class="inputs">
                <p>Already have account? <a href="logIn.php">Log In</a></p>
            </div>
            <div class="button">
                <button type="submit" name="addUser">SIGN UP</button>
            </div>
        </form>
    </main>
</body>
<script>
    var passwordInput = document.getElementById("password");
    var toggler = document.getElementById("toggler");

    // Function to show the toggler when user starts typing
    passwordInput.addEventListener("input", function () {
        if (passwordInput.value.length > 0) {
            toggler.style.opacity = "1";
            toggler.style.pointerEvents = "all";
        } else {
            toggler.style.opacity = "0";
            toggler.style.pointerEvents = "none";
        }
    });

    // Function to toggle password visibility
    toggler.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggler.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            toggler.textContent = "Show";
        }
    });
</script>

</html>

<?php

include ("conn.php");

if (isset ($_POST["addUser"])) {
    $names = $_POST["names"];
    $_SESSION["username"] = $_POST["username"];
    $username = $_SESSION["username"];
    $password = md5($_POST["password"]);

    $checkUser = mysqli_query($conn, "SELECT * from users WHERE username = '$username' ");
    if (mysqli_num_rows($checkUser) > 0) {
        echo "<script>alert('Username Already Exists');</script>";
        echo "<script>window.location.href ='signUp.php';</script>";
    } else {
        $sql = "INSERT INTO users (names, username, password) VALUES ('$names', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User Added Successfully');</script>";
            echo "<script>window.location.href ='home.php';</script>";
        } else {
            echo "<script>alert('Error');</script>";
        }
    }
}