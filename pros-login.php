<?php
include('connection.php');
$error = '';

if (isset($_POST['submit'])) {
    $username = $_POST['userid'];
    $katalaluan = $_POST['pass'];

$query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");

if (mysqli_num_rows($query) == 0) {
    $error = "Username atau katalaluan anda tidak sah";
    session_abort();
}

else {
    $row = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $row['username'];

    echo "<script> alert('Log masuk berjaya!'); </script>";
    echo "<script> window.location='dashboard.php'; </script>";

}
}
