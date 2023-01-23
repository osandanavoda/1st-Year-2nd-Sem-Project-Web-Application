<?php

session_start();



include 'db.php';
$name = '';
$message = '';
?>

<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/style.css?v=<?php echo time();  ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css?v=<?php echo time();  ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>
<body>
    
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html">admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    
                    <li>
                        <a  href="contact.php"><i class="fa fa-qrcode fa-3x"></i>Contact-Us</a>
                    </li>
                    <br>
                    <li>
                        <a  href="payment.php"><i class="fa fa-qrcode fa-3x"></i>Payment</a>
                    </li>
						   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Messages</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 
                      

           <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit
                        </div>
                        <div>
                        <?php 
                        $id = $_GET['edit'];
                        $sql = "SELECT * FROM payment where id=$id";
                        $result= mysqli_query($con,$sql);
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['name'];
                        $address = $row['address'];
                        $card = $row['card'];
                        $ex = $row['ex'];


                        if(isset($_POST['update']))
                            {
                                

                                $name = $_POST['name'];
                                $address = $_POST['address'];
                                $card = $_POST['card'];
                                $ex = $_POST['ex'];
                                
                                $query = "UPDATE payment SET  name='$name', address='$address', card='$card', ex='$ex' WHERE id='$id' ";
                                $query_run = mysqli_query($con, $query);

                                if($query_run)
                                {
                                    $_SESSION['status'] = "Data Updated Successfully";
                                    header('location: payment.php');
                                }
                                else
                                {
                                    $_SESSION['status'] = "Not Updated";
                                }
                            }
                        ?>
                        <form action="" method="post">
                            <h2>Edit</h2>
                            
                                
                            
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"><br>

                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>"><br>
                            <label>Card</label>
                            <input type="text" name="card" placeholder="Card" value="<?php echo $card; ?>"><br>
                            <label>Ex-Date</label>
                            <input type="text" name="ex" placeholder="Ex-Date" value="<?php echo $ex; ?>"><br>
                            
                            <button type="submit" name="update">Save</button>
                        </form>
                        

                    </div>
                    
                      <!-- End  Basic Table  -->
                </div>
            </div>
               
          
    <!--  SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
