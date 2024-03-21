<?php
    session_start();
    session_unset();
    header("location: logIn.php");