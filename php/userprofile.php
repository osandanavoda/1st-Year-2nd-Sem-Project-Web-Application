//frontend & backend

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/loginregistration.css" />
    <title>user profile</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
            <h2 class="title">User Profile</h2>
            <?php 
            
            $sql = "SELECT * FROM user WHERE username='{$_SESSION["user"]}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div>
            <lable>User Name</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-user"></i>
              <input type="text"  id="user" name="user" value="<?php echo $row['username'];?>"  readonly/>
            </div>
            <div>
            <lable>Password</lable></div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="pass"  value="<?php echo $row['password'];?>" readonly />
            </div>
            <div>
            <lable>Email</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-envelope"></i>
              <input type="text"  id="email" name="email" value="<?php echo $row['email'];?>"  readonly/>  
            </div>
            <div>
            <lable>Contact Number</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-phone"></i>
              <input type="text"  id="contact_number" name="contact_number" value="<?php echo $row['contact_number'];?>" readonly />
            </div>
            <div>
            <lable>Address</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-address-card"></i>
              <input type="text"  id="address" name="address" value="<?php echo $row['address'];?>" readonly />
            </div>
            <div>
            <lable>Gender</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-transgender"></i>
              <input type="text"  id="gender" name="gender" value="<?php echo $row['gender'];?>"  readonly/>
            </div>
            <?php
                }
            }

            ?>
            
          </form>


          <form action="" method="post" class="sign-up-form">
          <h2 class="title">User Profile</h2>
            <?php 
            
            $sql = "SELECT * FROM user WHERE username='{$_SESSION["user"]}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div>
            <lable>User Name</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-user"></i>
              <input type="text"  id="user" name="username" value="<?php echo $row['username'];?>"  readonly/>
            </div>
            <div>
            <lable>Email</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-envelope"></i>
              <input type="text"  id="email" name="email" value="<?php echo $row['email'];?>"  />
            </div>
            <div>
            <lable>Contact Number</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-phone"></i>
              <input type="text"  id="contact_number" name="contact_number" value="<?php echo $row['contact_number'];?>"  />
            </div>
            <div>
            <lable>Address</lable></div> 
            <div class="input-field">
                
              <i class="fas fa-address-card"></i>
              <input type="text"  id="address" name="address" value="<?php echo $row['address'];?>"  />
            </div>
            
            <?php
                }
            }

            ?>
            <input type="submit" class="btn" name="update" value="Update" />
            <input type="submit" class="btn" name="delete" value="Delete" onClick="return confirm('Are you sure you want to delete?')"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Edit Profile</h3>
           <br><br><br>
            <button class="btn transparent" id="sign-up-btn">
              Edit
            </button>
            <a href="home.php"><button class="btn transparent" >
              Home
            </button></a>
            <a href="payment.php"><button class="btn transparent" >
              Payment
            </button></a>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>User Profile</h3>
            <br><br><br>
            <button class="btn transparent" id="sign-in-btn">
              Profile
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
  </body>
</html>

//update php
<?php

if(isset($_POST['update']))
{
    

    $name = $_POST['username'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    $query = "UPDATE user SET  email='$email', contact_number='$contact_number', address='$address' WHERE username='$name' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
    }
}

?>

//delete php
<?php


if(isset($_POST['delete']))
{
    $username = $_POST['username'];

    $query = "DELETE FROM user WHERE username='$username' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header("Location: logout.php");
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
    }    
}
?>
