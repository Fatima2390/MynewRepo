<?php include "nav.php"; ?>
<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Please Feel Free to Contact Us</span>
          <h1 class="page-title"></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-header-close --> 


<!-- contact-start -->

<div class="space-medium">
  <div class="container">
    <div class="row"> 
      <!-- contact-form-start -->
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> <span class="small-title mb30">Request a free </span>
        
<div class="container">
<div class="row">
<div class="col-lg-6 m-auto">
<div class="card">
<div class="card-title">
<h1 class="text-center py-2">Contact Us</h1>
<hr>
<?php
$Msg = "";
if(isset($_GET['error']))
{
  $Msg ="please fill in the Blanks";
  echo '<div class="alert alert-danger">'.$Msg.'</div>';
}
if(isset($_GET['Success']))
{
  $Msg ="Your Message Send SuccessFully";
  echo '<div class="alert alert-success">'.$Msg.'</div>';
}
?>
</div>
<div class="card body">
<form action="process.php" method="POST">
<input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
<input type="text" name="Email" placeholder="Email" class="form-control mb-2">
<input type="text" name="sub" placeholder="Subject" class="form-control mb-2">
<textarea name="msg" placeholder="Write The Message" class="form-control mb-2"></textarea>
<button class="btn btn-success" class="sendbtn">Send</button>


</form>
                       </div>
                  </div>

              </div>
         </div>
    



</div>
      <!-- contact-form-close --> 
      <!-- contact-info-start -->
     
      <!-- contact-info-close --> 
    </div>
  </div>
</div> 
     
<!-- map-start -->
<div class="contact-block">
  <div class="container">
    <div class="col-md-12">
      <div class="text-center" style="color: #8e1e1a;"><i class="fa fa-map-marker fa-2x "></i></div>
    </div>
  </div>
</div>
<!-- map-start --> 
<!-- cta-start -->
<div class="bg-default">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="cta-section">
          <h1 class="cta-title ">Want To Free Legal Advice?</h1>
          <p class="cta-text">( Call Us: + 800-123-4567 )</p>
          <p class="mb20">or</p>
          <div class=""> <a href="#" class="btn btn-default">Request Free Consultation</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- cta-close --> 
<!-- contact-close --> 









 <!-- footer start -->
 <div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-about-start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-widget">
                        <div class="logo mb30">
                            <a href="index.html"><img src="images/ft-logo.png" class="img-responsive" alt=""></a>
                        </div>
                        <p></p>
                        <a href="#" class="btn btn-default btn-sm">contact us</a></div>
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
                                <li> Mon-Thu: 9:00am - 9:00pm</li>
                                <li>Fri: 6:00pm - 9:00pm </li>
                                <li>Sat: 10:00am - 3:00pm</li>
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