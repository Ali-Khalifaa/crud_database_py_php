<?php

if (empty($_POST['username'])) {

    header("LOCATION:insert.html");
}else{
    // var
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $coonection = mysqli_connect("localhost","root","","crud-db");

    $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$username','$email','$password')";

    mysqli_query($coonection,$query);

    header("LOCATION:select.php");
}

?>