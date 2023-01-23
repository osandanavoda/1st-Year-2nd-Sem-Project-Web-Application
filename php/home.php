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
        <img src="../images/logo.png" alt="">
    </a>

    <nav class="navbar">
    <a href="home.php">home</a>
        <a href="aboutus.php">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="newad.php">new ad</a>
        <a href="contactus.php">contact</a>
        <a href="vision.php">vision</a>
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Ona Deyak</h3>
        <p>Post Your Advertisment Now....</p>
        <a href="#" class="btn">Post</a>
    </div>

</section>

<!-- home section ends -->


<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> adve<span>rt</span>isements  </h1>

    <div class="box-container">

        <div class="box">
            
            <div class="image">
                <img src="../images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>thai & mighty</h3>
                <div class="price">RS: 500.00 </div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../images/p2.png" alt="">
            </div>
            <div class="content">
                <h3>online math tutoring</h3>
                <div class="price">contact for more details </div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../images/p3.png" alt="">
            </div>
            <div class="content">
                <h3>Home for sale</h3>
                <div class="price">$600,000 </div>
            </div>
        </div>
        <div class="box">
            
            <div class="image">
                <img src="../images/p4.png" alt="">
            </div>
            <div class="content">
                <h3>evaly</h3>
                <div class="price">contact for more details </div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../images/p5.png" alt="">
            </div>
            <div class="content">
                <h3>JEEP</h3>
                <div class="price">contact for more details </div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../images/p6.png" alt="">
            </div>
            <div class="content">
                <h3>burger</h3>
                <div class="price">RS: 250.00 </div>
            </div>
        </div>

    </div>

</section>




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
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">contact</a>
    </div>

    <div class="credit"> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>