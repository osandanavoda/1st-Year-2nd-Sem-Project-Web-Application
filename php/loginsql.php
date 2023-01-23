//login Backend

<?php

session_start();

include('db.php');

$name = $_POST['user'];
$password = $_POST['pass'];

$sql = "select * from user where username = '$name' && password = '$password' ";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['user'] = $name;
    header('location: home.php');
}
else{
    echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
    
}

?>