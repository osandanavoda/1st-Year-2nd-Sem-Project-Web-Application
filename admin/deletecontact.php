<?php

session_start();

//Backend Delete

include 'db.php';



if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("DELETE FROM contactus WHERE id=$id");
    header('location: contact.php');
}



?>
