//Register Backend

<?php

session_start();

header('location:login.php');

include('db.php');

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact_number'];
$address = $_POST['address'];
$gender = $_POST['gender'];

$sql = "select * from user where username = '$name' ";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}
else{
    $reg = " insert into user(username, email, password, contact_number, address, gender) values ('$name', '$email', '$password', '$contact', '$address', '$gender')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>