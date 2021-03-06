<?php

require 'config/db.php';

$msg = '';
$emailErrMsg = '';
$nameErrMsg = '';

if (isset($_POST['submit'])){
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $name = htmlspecialchars(mysqli_real_escape_string($connection, trim($_POST['name'])));
    $email = htmlspecialchars(mysqli_real_escape_string($connection, trim($_POST['email'])));
    $comment = htmlspecialchars(mysqli_real_escape_string($connection, trim($_POST['comment'])));

    $query = "INSERT INTO users(name, email, comment)   VALUES('$name', '$email', '$comment')";

    if (empty($name)){
        $nameErrMsg = 'Name cannot be empty';                
        
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErrMsg = 'Not a valid email';

    } else {   
        if (mysqli_query($connection, $query)){
            $msg = "Succesfully added $name";
        } else {
            echo 'ERROR: ' . mysqli_error($connection);
        }
    }
}
?>