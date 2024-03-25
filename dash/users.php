<?php
    
    include("conn.php");

    if($_SESSION["userRole"] != 'SUPER_ADMIN') {
        echo "<script>
        alert('You are not authorized to view this page.'); 
        window.location.href='./index.php';</script
        </script>";
    }

    if(isset($_GET["deleteId"])) {
        $deleteId = $_GET["deleteId"];
        $deleteQuery = mysqli_query($conn, "DELETE from users where id = '$deleteId' ");
        if($deleteQuery) {
            echo "<script>alert('Deleted'); window.location.href='users.php';</script>";
        }else{
            echo "<script>alert('Failed to deleted'); window.location.href='users.php';</script>";
        }
    }

    $selectQuery = "SELECT * from users where userName != '$_SESSION[userName]' ";
    $execute = mysqli_query($conn, $selectQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company | users</title>
</head>

<body>
    <div class="dashboard">
        <div class="left">
            <?php include ("sidebar.php"); ?>
        </div>
        <div class="right">
            <div class="top">
                <?php include ("header.php"); ?>
            </div>
            <div class="mainContent">
                <div class="add">
                    <h1>Users</h1>
                    <a href="addUser.php">Add User</a>
                </div>
                <table border="1">
                    <tr>
                        <th>id</th>
                        <th>user name</th>
                        <th>user password</th>
                        <th>user role</th>
                        <th colspan="2">Operation</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($execute)){
                    ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["userName"] ?></td>
                        <td><?php echo $row["password"] ?></td>
                        <td><?php echo $row["userRole"] ?></td>
                        <td><a href="userUpdate.php?updateId=<?php echo $row["id"]; ?>">update</a></td>
                        <td><a href="?deleteId=<?php echo $row["id"]; ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>