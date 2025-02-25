<?php include "nav.php"; ?>
<br><br>
<div class="container">


<input type="radio" name="search" value="Location"> Location
<input type="radio" name="search" value="Service"> Service<br>
<input type="text" name="search_input" id=""><br>

<a href="" name="srch_btn">Search</a>

</div>


<?php


$conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
  
    
    if(isset($_POST['srch_btn']))
    {
      
      $search = $_POST['search'];
     
      $search_input = $_POST['search_input'];
      echo "<script>alert('$search_input')</script>";
      
    if($search == "Location")
    {
    $check = "SELECT * FROM lawyer where Location = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    echo $b = mysqli_num_rows($result1);
    if ( $b> 0) 
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
         </div>

         <?php
   }
  }
}
else if($search == "Service")
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
         </div>
  <?php
          }
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
         </div>


  <?php
         }
        }
        
      }
    
     

         ?>






       
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
</html>*/