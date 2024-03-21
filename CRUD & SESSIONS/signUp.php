<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="logIn">
    <form class="form" action="" method="POST">
        <h2>Create Account</h2>
        <div class="input">
            <label>First Name:</label>
            <input type="text" required name="fName">
        </div>
        <div class="input">
            <label>Last Name:</label>
            <input type="text" required name="lName">
        </div>
        <div class="inputs">
            <p>Already have account? <a href="logIn.php">Log In</a></p>
        </div>
        <div class="button">
            <button type="submit" name="addUser">SIGN UP</button>
        </div>
    </form>
</body>

</html>