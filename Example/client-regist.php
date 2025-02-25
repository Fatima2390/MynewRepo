<?php include "nav.php"; ?>

<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Register Yourself</span>
          <h1 class="page-title"></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-header-close --> 
<br>



<div class="container">
    <h2>Client Registration Form</h2>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  
  <div class="form-group">
    <label >City</label>
    <input type="text" class="form-control" name="city" required>
  </div>
  
  <div class="form-group">
      <label >Contact</label>
      <input type="number" class="form-control" name="contact" required>
  </div>
  
  <div class="form-group">
    <label >Gender</label>
    <input type="text" class="form-control" name="gender" required>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass" required>
  </div>

  
  <button type="submit" class="btn btn-primary" name = "sbt" >Submit</button>
</form>

</div>
   

<?php  
    if(isset($_POST['sbt'])){
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_city = $_POST['city']; 
        $c_contact = $_POST['contact'];
        $c_gender = $_POST['gender'];
        $c_password = $_POST['password'];
       
       

               

        $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
        $sql = "INSERT INTO clients(Name,Email,City , Contact , Gender, password ) VALUES ('{$c_name}' , '{$c_email}' , '{$c_city}' , '{$c_contact}' , '{$c_gender}','{$c_password}')";
        $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");
        
        if($result)
        {
            echo "<script>alert('Data  Inserted....!!')</script>";
        }
        else {
           
            echo "<script>alert('Insert Failed')</script>";
        }
       
        // header ("location: http://localhost/project/client-view.php");
        } 

?>






 <!-- footer start -->
 <div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-about-start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-widget">
                        <div class="logo mb30">
                            <a href="index.html"><img src="../images/ft-logo.png" class="img-responsive" alt=""></a>
                        </div>
                        <a href="#" class="btn btn-default btn-sm">Contact us</a></div>
                </div>
                <!-- footer-about-close -->
                <!-- footer-useful links-start -->
                <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul>
                            <li><a href="#">Home </a></li>
                            <li><a href="#">About us </a></li>
                            <li><a href="#">Practice Area </a></li>
                            <li><a href="#">Cases </a></li>
                            <li><a href="#">News </a></li>
                            <li> <a href="#">Contacts</a></li>
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
                                <li>Mon-Thu: 9:00am - 09:00pm</li>
                                <li>Fri: 6:00pm - 09:00pm </li>
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