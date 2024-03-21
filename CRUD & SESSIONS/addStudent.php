<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home logIn">
    <?php include ("aside.php") ?>
    <main>
        <form class="form" action="" method="POST">
            <h2>Add New Student</h2>
            <div class="input">
                <label>First Name:</label>
                <input type="text" required name="fName">
            </div>
            <div class="input">
                <label>Last Name:</label>
                <input type="text" required name="lName">
            </div>
            <div class="inputs">
                <div class="input">
                    <label>Age:</label>
                    <input type="number" required name="age" min="1" max="100" id="">
                </div>
                <div class="input">
                    <label>Class:</label>
                    <input type="text" required name="class" min="1" max="100" id="">
                </div>
            </div>
            <div class="button">
                <button type="submit" name="addUser">Add Student</button>
            </div>
        </form>
    </main>
</body>

</html>
<?php

include ("conn.php");
if (isset ($_POST["addUser"])) {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $age = $_POST["age"];
    $class = $_POST["class"];
    $sql = "INSERT INTO students (firstName, lastName, age, class) VALUES ('$fName', '$lName', '$age', '$class')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('User Added Successfully');</script>";
        echo "<script>window.location.href = 'viewStudents.php';</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}