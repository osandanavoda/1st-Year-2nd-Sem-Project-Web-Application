<?php

session_start();

//Backend
//Insert

include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['number'];
$message = $_POST['message'];

$sql = "select * from contactus where name = '$name' ";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    $reg = " insert into contactus(name, email,  number, message) values ('$name', '$email', '$contact', '$message')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
    header('location:home.php');
}
else{
    $reg = " insert into contactus(name, email,  number, message) values ('$name', '$email', '$contact', '$message')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
    header('location:home.php');
}

?>