//Backend

<?php

session_start();



include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$details = $_POST['details'];

$sql = "select * from advertisement where name = '$name' ";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Registration unSuccessful";
    
}
else{
    $reg = " insert into advertisement(name, contact,  email, address, details) values ('$name', '$contact', '$email', '$address, '$details')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
   
}

?>