<?php

if (empty($_POST['id'])) {

    header("LOCATION:delet.html");
}else{
    // var
    $id = $_POST['id'];


    $coonection = mysqli_connect("localhost","root","","crud-db");

    $deletQuery = "DELETE FROM `users` WHERE `id` = $id";

    mysqli_query($coonection,$deletQuery);

    header("LOCATION:select.php");
}

?>