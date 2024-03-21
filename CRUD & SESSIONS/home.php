<?php

include ("conn.php");
session_start();
if(isset($_SESSION["username"])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eSHURI | Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home dashboard">
    <?php include ("aside.php") ?>
    <main>
        <header>
            <div>
                <h6>Welcome | <span><?php echo $_SESSION["username"] ?></span></h6>
                <h6>Dashboard</h6>
                <h6>eSHURI Management System</h6>
            </div>
        </header>
        <article>
            <div class="title">
                <h2>Summary</h2>
                <div>
                    <div>
                        <?php
                            $getTotalStudents = mysqli_query($conn, "SELECT * FROM students"); 
                            $totalStudents = $getTotalStudents->num_rows;
                        ?>
                        <span>Total Students</span>
                        <span><?php echo $totalStudents ?></span>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>

</html>
<?php
}else{
    header("location: logIn.php");
}