<?php

session_start();

if (!$_SESSION['username']) {
        header("location: index.php");
    }


    include('confirmation.php');

    
?>

<html>
    <body>
        <h1> Logged in successfully </h1>
        <a href="logout.php">Log out</a>
    </body>
</html>