<?php
//calling our database connection
include_once('connection.php')
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT *from loginform where username ='".$username"' AND password ='".$password"' limit 1 ";

    $result = mysqli_query($con,$sql);
}

?>