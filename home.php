<?php
    session_start();
    include("conn.php");
    if($_SESSION["username"]){
        echo "Welcome, ".$_SESSION["username"]."<br>";
        echo "<a href='logOut.php'>Log Out</a>";
        echo "<button onclick='printPage()'>Print</button>";
        echo "<script>
            function printPage() {
                window.print();
            }
        </script>";
    }else{
        session_destroy();
        header("location: index.html");
    }