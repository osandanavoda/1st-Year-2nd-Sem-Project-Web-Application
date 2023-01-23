//Backend Delete

<?php

session_start();



include 'db.php';



if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("DELETE FROM ad WHERE id=$id");
    header('location: contact.php');
}



?>
