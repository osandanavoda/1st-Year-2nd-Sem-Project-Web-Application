//Edit //Delete

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
                    
                    <li>
                        <a  href="ad.php"><i class="fa fa-qrcode fa-3x"></i> Advertisement</a>
                    </li>		   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Payment Details</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 
                      

           <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Messages
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                                    $result = $con-> query("SELECT * FROM payment") or die($con->error);

                                    ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Card Holder</th>
                                            <th>Address</th>
                                            <th>Card Number</th>
                                            <th>Ex-Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result->fetch_assoc()): ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['card']; ?></td>
                                                <td><?php echo $row['ex']; ?></td>
                                                <td>
                                                    <a href= "editpayment.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                                                    
                                                    <a href= "deletepayment.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                                </td>




                                            </tr>
                                        <?php endwhile; ?> 

                                   
                                    </tbody>
                                </table>
                                <?php
                                    function pre_r($array){
                                        echo '<pre>';
                                        print_r($array);
                                        echo '</pre>';
                                    }
                                    ?>
                            </div>
                        </div>
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
