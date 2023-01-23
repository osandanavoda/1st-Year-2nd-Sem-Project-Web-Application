//Backend
//Backend Insert //Create

<?php

session_start();

header('location:userprofile.php');

include('db.php');

$name = $_POST['name'];
$address = $_POST['address'];
$card = $_POST['card'];
$ex = $_POST['ex'];
$cvv = $_POST['cvv'];


$sql = "select * from payment where card = '$card' ";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Card Already Added";
}
else{
    $reg = " insert into payment(name, address, card, ex, cvv) values ('$name', '$address', '$card', '$ex', '$cvv')";
    mysqli_query($con, $reg);
    echo" Save Successful";
}

?>