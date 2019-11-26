<?php
//calling our database connection
include_once('connection.php')
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    //getting submitted user data from the database
    
    $sql = "SELECT *from loginform where username =? AND password =? limit 1 ";

    $stmt = $con->prepare($sql) 
    $stmt->bind_param('ss',$_POST['username'],$_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $ result->fetch_object();

    //verify user password and set $_SESSION
    if (password_verify($_POST['password'],$user->password)){
        $_SESSION['user_id'] = $user->ID;
    }

}

?>