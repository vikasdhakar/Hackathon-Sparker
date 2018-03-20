<?php
$servername = "localhost";
$username = "guru0011";
$password = "guru0011";
$dbname = "gecj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection




if(isset($_POST['btn-login'])){
    $email = ($_POST['email']);
    $name=($_POST['fname'])." ".($_POST['lname']);
    $num = ($_POST['num']);
    $colid = ($_POST['id']);
    $depart2 = ($_POST['depart2']);
    $depart1 = ($_POST['depart1']);
    $branch = ($_POST['branch']);
    $year = ($_POST['year']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO new (name,num,email,colid,depart1,depart2,branch,syear)
VALUES ('$name', '$num', '$email','$colid','$depart1','$depart2','$branch','$year');";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $Msg = "Record created successfully. Your ID is: " . $last_id;
} else {
    $Msg = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Techstrom | Register</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
       <script>
function validation()
{
    var result=true;
    var x=document.getElementById("fname");
    if(x.value.length<1)
    {
        document.getElementById('erfname').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erfname').innerHTML = '';
    }
    var d=document.getElementById("id");
    if(d.value.length!=10)
    {
        document.getElementById('erid').innerHTML = 'Length Should Be equal to 10';
        var result=false;
    }
    else{
        document.getElementById('erid').innerHTML = '';
    }
    var y=document.getElementById("num"); 
    if(y.value.length!=10)
    {
        document.getElementById('ernum').innerHTML = 'Length Should Be equal to 10';
        var result=false;
    }
    else{
        document.getElementById('ernum').innerHTML = '';
    }
    var c=document.getElementById("lname");
    if(c.value.length<1)
    {
        document.getElementById('erlname').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erlname').innerHTML = '';
    }
var d=document.getElementById("email");
if(d.value.length<1)
    {
        document.getElementById('eremail').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('eremail').innerHTML = '';
    }
	
    return(result);
}
</script>
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
                

             
                    <li><a href="events.html">Event</a></li>             
                    
                    <li><a href="About.html">About us</a></li>
              

           
                
                <li><a href="sponser.html">Sponsers</a></li>
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
      <div class="container">
        <div class="page-header">
          <h1>Register To Become Co-ordinator Or Volunteer</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of Techstorm</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validation()" onsubmit="validation()">
                    <?php
                    if(isset($Msg)){
                        ?>
                        <div class="alert alert-info">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $Msg; ?>
                        </div>
                        <?php
                            }
                        ?>
                  <input type="text" name="id" id ="id" placeholder="College ID">
                    <center>
                    <div id="erid" style="color: red" ></div><br>
                    </center><br>
                    <input type="text" name="fname" id="fname" placeholder="First Name">
                    <center>
                    <div id="erfname" style="color: red" ></div><br>
                    </center><br>
                    <input type="text" name="lname" id="lname" placeholder="Last Name">
                    <center>
                    <div id="erlname" style="color: red" ></div><br>
                    </center><br>
                  <input type="text" name="email" id="email" placeholder="Email">
                    <center>
                    <div id="eremail" style="color: red" ></div><br>
                    </center><br>
                    <input type="text" name="num" id="num" placeholder="Mobile Number">
                    <center>
                    <div id="ernum" style="color: red" ></div><br>
                    </center>
                    <label for="sel1"><h3>Year:</h3></label>
                      <select class="form-control" id="year" name="year">
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                      </select>
                    <br>
                    <br>
                    <label for="sel1"><h3>Your Branch Or Course:</h3></label>
                      <select class="form-control" id="branch" name="branch">
                        <option value="CS">Computer Science</option>
                        <option value="CE">Civil</option>
                        <option value="ME">Mechanical</option>
                        <option value="EE">Electrical</option>
                          <option value="EC">Electronic And Communication</option>
                          <option value="IT">Information Technology</option>
                          <option value="BBA">BBA</option>
                          <option value="BCA">BCA</option>
                          <option value="MBA">MBA</option>
                      </select>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label for="sel1"><h3>Your 1st Preference:</h3></label>
                      <select class="form-control" id="Department" name="depart1">
                        <option value="Technical">Technical</option>
                        <option value="Managment">Managment</option>
                        <option value="Event&Compition">Event & Comition</option>
                        <option value="Market & Economic">Market & Economic</option>
                      </select>
                    <br>
                    <br>
                    <label for="sel1"><h3>Your 2nd Preference:</h3></label>
                      <select class="form-control" id="Department" name="depart2">
                        <option value="Technical">Technical</option>
                        <option value="Managment">Managment</option>
                        <option value="Event&Compition">Event & Comition</option>
                        <option value="Market & Economic">Market & Economic</option>
                      </select>
                    <br>
                    <hr>
                    
                  <div>
                    <input type="submit" value="Register" name="btn-login" class="btn btn-primary btn-large">
                  </div>
                    
                </form>
              </div>
            </div>
          </div>
        </div>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
