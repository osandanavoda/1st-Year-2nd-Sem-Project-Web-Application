<?php

session_start();


?>

//Frontend


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
<div class="contactus"> 
<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467112166!2d79.9707558152318!3d6.9146828204092845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1633088353723!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <form action="contactphp.php" method="post">
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
                <input type="text" placeholder="number" name="number">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope-open-text"></span>
                <input type="text" placeholder="Messege" name="message">
            </div>
            <input type="submit" class="btn" value="Send" />
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

