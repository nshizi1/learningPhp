<?php

include ("conn.php");
session_start();
if (isset ($_SESSION["username"])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eSHURI | Add Student Marks</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="home logIn">
        <?php include ("aside.php") ?>
        <main>
            <form class="form" action="" method="POST">
                <h2>Add Student Marks</h2>
                <div class="input">
                    <label for="names">Student Names:</label>
                    <select name="studentId" required>
                        <option value="" selected disabled>Choose Student Names</option>
                        <?php
                        $getNames = mysqli_query($conn, "SELECT * from students");
                        while ($row = mysqli_fetch_assoc($getNames)) {
                            ?>
                            <option value="<?php echo $row["id"] ?>"><?php echo $row["firstName"]." ".$row["lastName"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input">
                    <label>Lesson One:</label>
                    <input type="number" required name="lessonOne" min="0" max="100">
                </div>
                <div class="input">
                    <label>Lesson Two:</label>
                    <input type="number" required name="lessonTwo" min="0" max="100">
                </div>
                <div class="input">
                    <label>Lesson Three:</label>
                    <input type="number" required name="lessonThree" min="0" max="100">
                </div>
                <div class="button">
                    <button type="submit" name="record">Record Marks</button>
                </div>
            </form>
        </main>
    </body>

    </html>
    <?php

    if(isset($_POST["record"])) {
        $studentId = $_POST["studentId"];
        $lessonOne = $_POST["lessonOne"];
        $lessonTwo = $_POST["lessonTwo"];
        $lessonThree = $_POST["lessonThree"];
        $sql = "INSERT INTO marks(lessonOne, lessonTwo, lessonThree, studentId) VALUES ('$lessonOne', '$lessonTwo', '$lessonThree', '$studentId')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Marks Added Successfully');</script>";
            echo "<script>window.location.href = 'home.php';</script>";
        }else{
            echo "<script>alert('Error');</script>";
        }
    }
    
} else {
    header("location: logIn.php");
}