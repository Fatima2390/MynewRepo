<?php include "nav.php"; ?>

<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Please Login Here</span>
          <h1 class="page-title"></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-header-close --> 





<br>
<div class="container">

<h2><ins> Client Login Form</ins> </h2>

<form action="" method ="POST">

   <div class="form-group">
    <label >Username</label>
    <input type="text" name="username" class="form-control"  required>
  </div>


  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control"  required>
  </div>

  <button name="login" class="btn btn-primary" ><a href="index.php"></a> Login</button>
  <br><br>
</form>



</div>



<br><br>


<?php

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
    $sql = "select * from clients where Name = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn , $sql) or die ("Querry Failed");
    $a = mysqli_num_rows($result);

    if($a > 0)
    {

        while($row = mysqli_fetch_assoc($result))
        {
            session_start();

            $_SESSION['username'] = $row['$username'];
            
        }
    }
    else
    {
        echo '<script>alert("Username and Password are not correct")</script>';
        // echo '<div class="alert alert-danger"> Username and Password are not correct </div>';
    }
    



}

?>



































<?php include "footer-file.php"; ?>

