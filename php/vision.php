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
    <link rel="stylesheet" href="../css/style.css">

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
<!-- vision section starts  -->
<div class="contactus">
<section class="about" id="about">

    <h1 class="heading"> vi<span>si</span>on</h1>

    <div class="row">

        <div class="image">
            <img src="../images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>Our Vision</h3>
            <p>By changing the industry and creating new norms of professionalism and success, we aim to be sri lankan leaders in online advertising field.
 

</p>
            <p>Our vision is to become a top agency in the Sri lankan business field, providing online advertising strategies, digital sales solutions, and social media marketing </p>
            
        </div>

    </div>
    </div>
</section>

</div>

<!-- vision section ends -->
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
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit"> | all rights reserved</div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="../js/script.js"></script>
</body>
</html>