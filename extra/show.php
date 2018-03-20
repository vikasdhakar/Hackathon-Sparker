<?php

include_once('../dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Techstrom | A Technical Cum Cultural Fest">
    <meta name="author" content="Your name">
    <title>Techstrom | New Regestrations</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Techstrom theme -->
    <link href="../css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
     <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.html" class="brand brand-bootbus">Techstrom</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                

             
                           
                    
                    <li><a href="about.html">About us</a></li>
              
				 <li><a href="events.html">Event</a></li>     
           
                
                <li><a href="sponser.html">sponsers</a></li>
                   <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="signup3.php">Registration to join us </a></li>
               
                    
                <li><a href="signin.html">Sign in</a></li>
                 <li><a href="signup.html">Sign up</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
  
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
            <ul class="thumbnails">
            <?php
            
                $sql = "SELECT name,email,num,colid,depart1,depart2,branch,syear FROM new";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$i++;
        echo "<li class='span4'><div class='thumbnail'><div class='caption'> <h4>S.no = ".$i."</h4><br><h6> "." Name: ".$row["name"]."</h6><h6> - Email: ".$row["email"]."</h6><h6> - Number: ".$row["num"]."</h6><h6> - College Id: ".$row["colid"]."</h6><h6> - 1st Preference: ".$row["depart1"]."</h6><h6> - 2nd Preference: ".$row["depart2"]."</h6><h6> - Branch: ".$row["branch"]."</h6><h6> - Year: ".$row["syear"]."</h6></div></div></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
            
            ?>
            </ul>
        </div>
      </div>
                
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
           <!-- <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
           <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>-->
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> Information</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="About.html">About us</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="sponser.html">Sponsers</a></li>
                
           
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Accessibility </h4>
            <nav>
                        </nav>
    
            <nav>
              <ul class="quick-links">
                <li><a href="signup3.php">Register As New</a></li>
                <li><a href="signin.html">Signup</a></li>
                <li><a href="signup.html">Signin</a></li>   
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="http://www.facebook.com/Techstorm-2k18-1193955784038336/?ti=as"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="http://www.techstromgecj@gmail.com"><i class="icon-envelope"></i></a>        
            </div>

          </div>      
          <div class="span3">
            <h4>Site Last Updated :</h4><script language="javascript">
var d= new Date();
document.write(d);
</script><br><br>

		<div class="mu-footer-widget">
                <h4>Visitors Count</h4>
           <!-- hitwebcounter Code START -->
<img src="http://hitwebcounter.com/counter/counter.php?page=6757730&style=0025&nbdigits=7&type=page&initCount=500" title="People Viewed" Alt="People Viewed"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a title="People Visited" 
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica; 
                                        font-size: 11px; color: #85948C; text-decoration: underline ;"></a>   
                             
                                                            </div>
															
															
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <center>
		<div class="container">
        <p>
          &copy; 2017 Techstrom | All Rights Reserved.<br>

		  <h4>Designed By: <a href="https://www.facebook.com/vipinmeena2012">VIPIN MEENA</a> & <a href="https://www.facebook.com/vikasdhakar07"> VIKAS DHAKAR</a> <br>
		  Developed By: <a href="https://www.facebook.com/gsv0009?">GURPINDER SINGH </a> & <a href=""> BRIJESH KAIM</a><br>
			( Department Of Computer Science, <a href="http://www.gecj.ac.in"> Govt. Engg. College, Jhalawar</a> )</h4>
        </p>
      </div>
	  </center>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/boot-business.js"></script>
  </body>
</html>
