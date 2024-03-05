<?php
    session_start();
    include("conn.php");
    if($_SESSION["username"]){
        echo "Welcome, ".$_SESSION["username"]."<br>";
        echo "<a href='logOut.php'>Log Out</a>";
    }else{
        session_destroy();
        header("location: index.html");
    }