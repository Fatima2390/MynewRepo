<?php include "nav.php"; ?>


<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Lawyer Registration</span>
          
        </div>
      </div>
    </div>
  </div>
</div>

<br><br>



<div class="container">
    <h2>Lawyer Registeration Form</h2>
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label >CNIC</label>
    <input type="number" class="form-control" name="nic" maxlength="14" required>
  </div>


  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  
  <div class="form-group">
  <label >Specialization</label><br>
  <select name="specialize" id="" required class="form-control">
  <?php
 $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Specialize</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['service']?>"><?php echo $row['service']?></option>
<?php

    }

    ?>
   
  </select>
    
  </div>

  

  <!-- <div class="form-group">
    <label >Specializee</label>
    <input type="text" class="form-control" name="cases_done" required>
  </div> -->
  
  <div class="form-group">
    <label >Cases Done</label>
    <input type="number" class="form-control" name="cases_done"  required>
  </div>
  
  <div class="form-group">
      <label >Success Cases</label>
      <input type="number" class="form-control" name="succes_case"  required>
  </div>
  
  <div class="form-group">
    <label >Contact</label>
    <input type="number" class="form-control" name="contact" required>
  </div>
  
  <div class="form-group">
  <label >Location</label><br>
  <select name="location" id="" required class="form-control">
  <?php
 $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
 $sql = "select * from location";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Location</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>
<?php

    }

    ?>
   
  </select>
    <!-- 
    <input type="text" class="form-control" name="location" required> -->
  </div>
  
  <div class="form-group">
  <label >Services</label><br>
  <select name="services" id="" required class="form-control">
  <?php
 $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Services</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['service']?>"><?php echo $row['service']?></option>
<?php

    }

    ?>
   
  </select>
    
  </div>
  
  <div class="form-group">
    <label >Image</label>
    <input type="file" name="image" class="form-control"  required>
  </div>
  
  <button type="submit" class="btn btn-primary" name = "sbt" >Register Lawyer</button>
  <button type="submit" class="btn btn-primary" name = "cancel" ><a href="index.php"> Cancel </a></button>
</form>

</div>

<?php

if(isset($_POST['sbt'])){
    $l_nic = $_POST['nic'];
      $l_name = $_POST['name'];
      $l_spec = $_POST['specialize'];
      $l_c_d = $_POST['cases_done']; 
      $l_s_c = $_POST['succes_case'];
      $l_cont = $_POST['contact'];
      $l_loc = $_POST['location'];
      $l_serv = $_POST['services']; 

      $filename = $_FILES['image']['name'];
      $filesize = $_FILES['image']['size'];
      $filetmp = $_FILES['image']['tmp_name'];
      $des = "../backend/images/".$filename;

      move_uploaded_file($filetmp , $des);
      $sql1 = "select * from lawyer where nic = '{$l_nic}'";
      $result1 = mysqli_query($conn , $sql1) or die ("Regsiter Failed");
      $a = mysqli_num_rows($result1);
      
     if($a == 0)
     {
          if($l_s_c > $l_c_d)
          {
              echo "<script>alert('Success Cases are greater than Cases Done')</script>";
          }
          else{
      $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
      $sql = "INSERT INTO lawyer(nic , Name,Specialization,Cases_done , Success_cases , Contact , Location , Services , image) VALUES ('{$l_nic}', '{$l_name}' , '{$l_spec}' , '{$l_c_d}' , '{$l_s_c}' , '{$l_cont}' , '{$l_loc}' , '{$l_serv}' , '{$filename}' )";
      $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");
      
      if($result)
      {
          echo "<script>alert('Register Successfull....!!')</script>";
          
      }
      else {
         
          echo "<script>alert('Registration Failed')</script>";
      }

    }

  }
 else {
    echo "<script>alert('Already Registered')</script>";
 }    
       
      } 



?>
   
<br><br>


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
                            <li><a href="practice.php">Practice Area </a></li>
                            
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