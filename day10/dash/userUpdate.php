<?php
include ("conn.php");
if (isset ($_GET["updateId"])) {
    $updateId = $_GET["updateId"];
    $getUser = "SELECT * from users where id = '$updateId' ";
    $executeGetUser = mysqli_query($conn, $getUser);
    $fetchUser = mysqli_fetch_assoc($executeGetUser);
    $username = $fetchUser["userName"];
    $password = $fetchUser["password"];
    $userRole = $fetchUser["userRole"];


    if(isset($_POST["updateUser"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $updateUser = mysqli_query($conn, "UPDATE users set userName = '$username', password = '$password', userRole = '$role' where  id='$updateId' ");

        if($updateUser) {
            echo "<script>alert('Updated Successfully'); window.location.href='users.php'</script>";
        }else {
            echo "<script>alert('Not updated Successfully');</script>";
        }
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
        <input type="text" name="username" value="<?php echo $username ?>">
        <input type="password" name="password" value="<?php echo $password ?>">
        <select name="role">
            <option value="SUPER_ADMIN" 
            <?php echo ($userRole == 'SUPER_ADMIN') ? 'selected' : '' ?> >Super admin</option>
            <option value="NORMAL_USER" 
            <?php echo ($userRole == 'NORMAL_USER') ? 'selected' : '' ?> >Normal User</option>
        </select>
        <button type="submit" name="updateUser">Update User</button>
    </form>
</body>

</html>