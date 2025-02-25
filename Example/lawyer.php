<?php include "nav.php"; ?>

<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Best Lawyers You Can Hire</span>
          <h1 class="page-title"></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-header-close --> 
<br><br>

<div class="container">
<form action="lawyer.php" method="POST">

<input type="radio" name="search" value="Location" style= "margin-left:20px;" required > Location
<input type="radio" name="search" value="Service" style= "margin-left:20px;"> Service
<input type="text" name="search_input" placeholder="Search By Location Or Services" id="" style= "margin-left:20px; width:300px;"  required>

<button name="srch_btn">Search</button>

</form>


</div>

<div class="container">

<br><br><br>

<?php


$conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
  
    
    if(isset($_POST['srch_btn']))
    {
      
      $search_var = $_POST['search'];
     
      $search_input = $_POST['search_input'];
      
      
    if($search_var == "Location")
    {
    $check = "SELECT * FROM lawyer where Location = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    $b = mysqli_num_rows($result1);
    
    if ($b> 0) 
  {
   while($a = mysqli_fetch_assoc($result1))
   {
     
   

?>
<div class="col-md-3">
<div class="card">
<div class="card-body">
<img src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="#" class="btn btn-primary stretched-link">View Profile</a>

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>
         

         <?php
   }
  }
  else{
    echo "<h2> NO RECORDS FOUND </h2>";
  }
}
else if($search_var == "Service")
    {
    $check = "SELECT * FROM lawyer where Services = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    if (mysqli_num_rows($result1) > 0) 
  {
   while($a = mysqli_fetch_assoc($result1))
   {

  ?>
  <div class="col-md-3">
<div class="card">
<div class="card-body">
<img src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="#" class="btn btn-primary stretched-link">View Profile</a>

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>
  <?php
          }
       }
       else{
        echo "<h2> NO RECORDS FOUND </h2>";
      }
      }
     
    }
else
{
  

  $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
 $query = "SELECT * FROM lawyer";
 $run = mysqli_query($conn , $query);
 $check_lawyer = mysqli_num_rows($run) > 0;
 if($check_lawyer)

       {
         while($a = mysqli_fetch_assoc($run))
         {

  ?>
<div class="col-md-3">
<div class="card">
<div class="card-body">
<img style="width:300px; height:250px;" src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<input type="hidden" class="form-control" name="id" value = "<?php echo $a['LawyerID']; ?>" required>
<br><br><br>
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<br><br>
<!-- <h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4> -->
<a href="lawyer-profile.php?id=<?php echo $a['LawyerID'] ?>" class="btn btn-primary stretched-link">View Profile</a>
<!--<a href="appointment.php?id=<?php echo $a['LawyerID']; ?>" class="btn btn-primary stretched-link">Book An Appointment</a>-->

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>


  <?php
         }
        }
        
      }
    
     

         ?>

         <br><br><br>

</div>

<br><br><br>








<!-- footer start -->
<div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-about-start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-widget">
                        <div class="logo mb30">
                            <a href="index.php"><img src="images/ft-logo.png" class="img-responsive" alt=""></a>
                        </div>
                        <a href="#" class="btn btn-default btn-sm">contact us</a></div>
                </div>
                <!-- footer-about-close -->
                <!-- footer-useful links-start -->
                <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li><a href="about.php">About us </a></li>
                            <li><a href="#">Practice Area </a></li>
                            <li><a href="Casees.php">Cases </a></li>
                            <li><a href="#">News </a></li>
                            <li> <a href="Contact.php">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-useful links-close -->
                <!-- footer-timing-start -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="footer-widget">
                        <h3 class="footer-title">Opening Hours</h3>
                        <div class="footer-timing">
                            <ul>
                                <li> Mon-Thu: 9:00am - 09:00pm</li>
                                <li>Fri: 06:00pm - 09:00pm </li>
                                <li>Sat: 10:00am - 03:00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer-timing-close -->
                <!-- footer-address-start -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <div class="contact-info">
                            <ul>
                                <li>4096 N Highland St, Arlington VA 32101, USA</li>
                                <li>800-123-4567</li>
                                <li>info@demolink.org</li>
                            </ul>
                        </div>
                        <div class="footer-social"> <span><a href="#"><i class="fa fa-facebook"></i></a></span> <span><a href="#"><i class="fa fa-google-plus"></i></a></span> <span><a href="#"><i class="fa fa-twitter"></i></a> </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-address-close -->
    </div>
    <!-- tiny-footer-start -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Law Firm 2017 © All Rights Reserved | Privacy Policy</p>
                </div>
            </div>
        </div>
        <!-- tiny-footer-start -->
    </div>
    <!-- footer close -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../js/sticky-header.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>


</body>
</html>