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
<!-- about section starts  -->
<div class="contactus">
<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="../images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>We aren't your typical advertising firm. We're a little agency in compared to the bigger agencies, but that doesn't imply we think or behave small. We have a lot of experience and much more ideas. We promise skill, ethics, and specialized support, and we will always put your purpose and goals first.
Our track record is impeccable: we've collaborated with a wide range of clients from various industries all over the Sri Lanka, achieving results and putting smiles on people's faces.
We appreciate staying ahead of the curve in our industry, so we work hard to stay up to date on all of the current best practices so you don't have to.

</p>
            <p>Our ultimate goal is to become a strategic partner who helps you navigate the road to success.</p>
            
        </div>

    </div>
</div>
</section>



<!-- about section ends -->
<!-- footer section starts  -->

<section class="footer" style="margin-bottom: 0px;">

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