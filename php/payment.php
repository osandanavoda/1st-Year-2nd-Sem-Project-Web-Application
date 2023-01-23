//Frontend

<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
}

include 'db.php';

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
    
    <link rel="stylesheet" href="../css/payment.css">

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
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    
    
    <h2>Payment Gateway</h2>
    <div class="form">
   
      <form action="paymentphp.php" method="post">
        
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" name="name" placeholder="Card Holder" required>
        <i class="fas fa-user"></i>
      </div>
      <div class="form">
      <div class="card space icon-relative">
        <label class="label">Address:</label>
        <input type="text" class="input" name="address" placeholder="Address" required>
        <i class="fas fa-address-card"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" name="card" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" required>
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" name="ex" class="input" data-mask="00 / 00"  placeholder="00 / 00" required>
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" name="cvv" data-mask="000" placeholder="000" required>
          <i class="fas fa-lock"></i>
        </div>
      </div>
        
      <input type="submit" class="btn" value="Sign up" />
       
    </div>
  </div>
</div>
</form>
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
    </div>

    <div class="credit"> | all rights reserved</div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="../js/script.js"></script>
</body>
</html>