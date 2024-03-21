<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Retrieve students</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home retrieve">
    <?php include ("conn.php");
    include ("aside.php"); ?>
    <main>
        <header class="onPrintHide">
            <div class="title">
                <h4>eSHURI | Retrieve students</h4>
                <a href="addStudent.php"><button>Add Student +</button></a>
            </div>
            <nav>
                <div class="search">
                    <form action="" method="post">
                        <input type="text" required name="search" placeholder="Search..">
                        <button type="submit" name="searchB">Search</button>
                    </form>
                </div>
                <div class="filter">
                    <form action="" method="post">
                        <input type="date" required name="sDate" id="">
                        <input type="date" required name="eDate" id="">
                        <button type="submit" name="filter">Filter Date</button>
                    </form>
                </div>
            </nav>
        </header>
        <div class="printTitle">
            <h3>Printed Report</h3>
        </div>
        <?php

        include ("conn.php");
        $getData = "SELECT * FROM students";

        if (isset ($_POST["filter"])) {
            $sDate = $_POST["sDate"];
            $eDate = $_POST["eDate"];
            $getData = "SELECT * FROM students WHERE registrationDate BETWEEN '$sDate' AND '$eDate'";
        }

        if (isset ($_POST["searchB"])) {
            $search = $_POST["search"];
            $getData = "SELECT * FROM students WHERE firstName LIKE '%$search%' || lastName LIKE '%$search%' || age like '$search' || class like '%$search%' || registrationDate like '%$search%' ";
        }

        if (isset ($_GET["deleteId"])) {
            $id = $_GET["deleteId"];
            $deleteData = mysqli_query($conn, "DELETE from students WHERE id = '$id'");
            if ($deleteData) {
                echo "<script>alert('Record Deleted');</script>";
            } else {
                echo "<script>alert('Failed to delete');</script>";
            }
        }


        $execute = mysqli_query($conn, $getData);



        ?>
        <table>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Registration Date</th>
                <th class="onPrintHide">Action</th>
            </tr>
            <?php

            if (mysqli_num_rows($execute) < 1) {
                ?>
                <tr>
                    <td colspan="7" class="noData">No Data Found!</td>
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
                            <?php echo $row["firstName"] ?>
                        </td>
                        <td>
                            <?php echo $row["lastName"] ?>
                        </td>
                        <td>
                            <?php echo $row["age"] ?>
                        </td>
                        <td>
                            <?php echo $row["class"] ?>
                        </td>
                        <td>
                            <?php echo $row["registrationDate"] ?>
                        </td>
                        <td class="onPrintHide action">
                            <a href="update.php?id=<?php echo $row["id"] ?>"><button class="edit">Edit</button></a>
                            <a href="?deleteId=<?php echo $row["id"] ?>"><button class="delete">Delete</button></a>
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