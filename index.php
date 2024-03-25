<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "intern_workTwo");
if (isset ($_POST["submit"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $checkUser = "SELECT * from users where userName = '$username' AND password = '$password' ";
    $executeCheckUser = mysqli_query($conn, $checkUser);
    if (mysqli_num_rows($executeCheckUser) > 0) {
        $getUserData = mysqli_fetch_assoc($executeCheckUser);
        // print_r($getUserData);
        $_SESSION["userRole"] = $getUserData["userRole"];
        $_SESSION["userName"] = $username;
        echo "<script>alert('logged In'); window.location.href='./dash/index.php';</script>";
    } else {
        echo "<script>alert('invalid credentials'); window.location.href='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Log in</h1>
        <label for="">username</label>
        <input type="text" name="userName" placeholder="enter username" required>
        <label for="">password</label>
        <input type="password" name="password" placeholder="enter password" required>
        <button type="submit" name="submit">Log in</button>
    </form>
</body>

</html>