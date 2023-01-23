<?php

session_start();



include 'db.php';



if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("DELETE FROM payment WHERE id=$id");
    header('location: payment.php');
}



?>
