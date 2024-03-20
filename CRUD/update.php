<?php
    include("conn.php");
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Update Student's Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="logIn">
    <?php
        $getData = mysqli_query($conn, "SELECT * FROM students WHERE id = '$id'");
        while($row = mysqli_fetch_assoc($getData)){
    ?>
    <form class="form" action="" method="POST">
        <h2>Update Student's Data</h2>
        <div class="input">
            <label>First Name:</label>
            <input type="text" required value="<?php echo $row["firstName"] ?>" name="fName">
        </div>
        <div class="input">
            <label>Last Name:</label>
            <input type="text" required value="<?php echo $row["lastName"] ?>" name="lName">
        </div>
        <div class="inputs">
            <div class="input">
                <label>Age:</label>
                <input type="number" required value="<?php echo $row["age"] ?>" name="age" min="1" max="100" id="">
            </div>
            <div class="input">
                <label>Class:</label>
                <input type="text" required value="<?php echo $row["class"] ?>" name="class" min="1" max="100" id="">
            </div>
        </div>
        <div class="button">
            <button type="submit" name="update">Add User</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>

</html>
<?php

    if(isset($_POST["update"])){
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $age = $_POST["age"];
        $class = $_POST["class"];
        $sql = "UPDATE students set firstName = '$fName', lastName = '$lName', age = '$age', class = '$class' where id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('User Updated Successfully');</script>";
            echo "<script>window.location.href = 'select.php';</script>";
        }
        else{
            echo "<script>alert('Error');</script>";
        }
    }