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
    <title>eSHURI | View Students marks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home retrieve">
    <?php include ("conn.php");
    include ("aside.php"); ?>
    <main>
        <header class="onPrintHide">
            <div class="title">
                <h4>eSHURI | View Students marks</h4>
            </div>
            <nav>
                <div class="search">
                    <form action="" method="post">
                        <input type="text" required name="search" placeholder="Search..">
                        <button type="submit" name="searchB">Search</button>
                    </form>
                </div>
                <a href="addMarks.php"><button>Add Marks +</button></a>
            </nav>
        </header>
        <div class="printTitle">
            <h3>Students Report</h3>
        </div>
        <?php

        include ("conn.php");
        $getData = "SELECT students.*, marks.*, (marks.lessonOne + marks.lessonTwo + marks.lessonThree) as total, ROUND((marks.lessonOne + marks.lessonTwo + marks.lessonThree) / 3, 2) as average from students RIGHT JOIN marks on students.id = marks.studentId";


        if (isset ($_POST["searchB"])) {
            $search = $_POST["search"];
            $getData = "SELECT students.*, marks.*, (marks.lessonOne + marks.lessonTwo + marks.lessonThree) as total, ROUND((marks.lessonOne + marks.lessonTwo + marks.lessonThree) / 3, 2) as average from students RIGHT JOIN marks on students.id = marks.studentId WHERE firstName LIKE '%$search%' || lastName LIKE '%$search%' || class like '%$search%' || lessonOne like '%$search%' || lessonTwo like '%$search%' || lessonThree like '%$search%' ";
        }



        $execute = mysqli_query($conn, $getData);



        ?>
        <table>
            <tr>
                <th>#</th>
                <th>Full Names</th>
                <th>Class</th>
                <th>Lesson One</th>
                <th>Lesson Two</th>
                <th>Lesson Three</th>
                <th>Average</th>
                <th>Total</th>
            </tr>
            <?php

            if (mysqli_num_rows($execute) < 1) {
                ?>
                <tr>
                    <td colspan="8" class="noData">No Data Found!</td>
                </tr>
                <?php
            } else {
                $count = 1;
                while ($row = mysqli_fetch_assoc($execute)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $count++ ?>
                        </td>
                        <td>
                            <?php echo $row["firstName"]."  ".$row["lastName"] ?>
                        </td>
                        <td>
                            <?php echo $row["class"] ?>
                        </td>
                        <td>
                            <?php echo $row["lessonOne"] ?>
                        </td>
                        <td>
                            <?php echo $row["lessonTwo"] ?>
                        </td>
                        <td>
                            <?php echo $row["lessonThree"] ?>
                        </td>
                        <td>
                            <?php echo $row["average"] ?>
                        </td>
                        <td>
                            <?php echo $row["total"] ?>
                        </td>
                    </tr>
                    <?php
                }
            }

            ?>
        </table>
        <div class="print onPrintHide">
            <button onclick="print()">Print Data</button>
        </div>
    </main>
</body>

</html>
<?php
}else{
    header("location: logIn.php");
}