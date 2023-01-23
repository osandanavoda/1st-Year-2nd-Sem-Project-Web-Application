//front end of new ad page
//Create //Insert

<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();  ?>">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="../images/logo1.png" alt="">
    </a>

    <nav class="navbar">
    <a href="home.php">home</a>
        <a href="aboutus.php">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="newad.php">new ad</a>
        <a href="contactus.php">contact</a>
        <a href="userprofile.php"><?php echo $_SESSION['user']; ?></a>
    </nav>

   

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <a href="logout.php"><div class="fas fa-sign-in-alt" id="sign-in-btn"></div></a>
    </div>

    

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    

</header>

<!-- header section ends -->



   
<!-- contact section starts  -->
//Form 

<div class="contactus"> 
<section class="contact" id="contact">

    <h1 class="heading"> <span>Place</span> Advertisement </h1>

    <div class="row">

        <form action="" method="post">
            <h3>get in touch</h3>
            
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name" name="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" placeholder="Contact Number" name="contact">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope-open-text"></span>
                <input type="text" placeholder="Address" name="address">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope-open-text"></span>
                <input type="text" placeholder="Discription" name="details">
            </div>
            <input type="submit" class="btn" value="Send" name="update"/>
        </form>

    </div>

</section>
</div>
<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">          
    <a href="home.php">home</a>
        <a href="aboutus.php">about</a>
        <a href="vision.php">vision</a>
        <a href="contactus.php">contact</a>
    </div>

    <div class="credit"> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>

<?php
include('db.php');
// php code to Insert data into mysql database from input text
if(isset($_POST['update']))
{
    
    // get values form input text and number

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $details = $_POST['details'];;
    

    // mysql query to insert data

    $query = "INSERT INTO ad(name, email, contact, address, details) VALUES ('$name','$email','$contact','$address','$details')";
    
    $result = mysqli_query($con,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($con);
}

?>