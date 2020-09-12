<?php

if (empty($_POST['id'])) {

    header("LOCATION:update.html");
}else{
    // var
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $coonection = mysqli_connect("localhost","root","","crud-db");

    $deletQuery = "UPDATE `users` SET `name`='$username',`email`='$email',`password`='$password' WHERE `id`=$id";

    mysqli_query($coonection,$deletQuery);

    header("LOCATION:select.php");
}

?>