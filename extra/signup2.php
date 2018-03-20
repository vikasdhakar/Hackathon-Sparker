<?php
$servername = "localhost";
$username = "id2884885_gecj";
$password = "techstrom";
$dbname = "id2884885_gecj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection




if(isset($_POST['btn-login'])){
    $email = ($_POST['email']);
    $name=($_POST['fname'])." ".($_POST['lname']);
    $num = ($_POST['num']);
    $colid = ($_POST['id']);
    $rank = ($_POST['rank']);
    $depart = ($_POST['depart']);
    $branch = ($_POST['branch']);
    $year = ($_POST['year']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO members (name,num,email,colid,rank,depart,branch,syear)
VALUES ('$name', '$num', '$email','$colid','$rank','$depart','$branch','$year');";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $Msg = "New record created successfully. Last inserted ID is: " . $last_id;
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
              

           
                
                <li><a href="Sponser.html">Sponsers</a></li>
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
          <h1>Register As Co-ordinator</h1>
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
                        <option value="Third">Third</option>
                        <option value="Fourth">Fourth</option>
                      </select>
                    <br>
                    <br>
                    <label for="sel1"><h3>Your Branch:</h3></label>
                      <select class="form-control" id="branch" name="branch">
                        <option value="CS">Computer Science</option>
                        <option value="CE">Civil</option>
                        <option value="ME">Mechanical</option>
                        <option value="EE">Electrical</option>
                          <option value="EC">Electronic And Communication</option>
                          <option value="IT">Information Technology</option>
                      </select>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label for="sel1"><h3>Your Department:</h3></label>
                      <select class="form-control" id="Department" name="depart">
                        <option value="Technical">Technical</option>
                        <option value="Managment">Managment</option>
                        <option value="Event&Compition">Event & Comition</option>
                        <option value="Market & Economic">Market & Economic</option>
                      </select>
                    <br>
                    <br>
                    <label for="sel1"><h3>Select Position</h3></label>
                      <select class="form-control" id="sel1" name="rank">
                        <option value="Organising">Organising</option>
                        <option value="DepartmentHead">Department Head</option>
                        <option value="DepartmentSecretery">Department Secretery</option>
                        <option value="Co-ordinator">Co-ordinator</option>
                          <option value="Volunter">Volunter</option>
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
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">contact us</a></li>
                <li><a href="patnerships.html">sponsers</a></li>
                <li><a href="leadership.html">about us</a></li>
                <li><a href="news.html">signup</a></li>
                <li><a href="events.html">signin</a></li>
           
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
                        </nav>
    
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href=""><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 Techstrom, Inc. All Rights Reserved.<br>
          <h5>
          Desidned by:- Vipin meena , Vikas Dhakar <br>Devloped by:- Gurpinder Singh Virk , Brijesh Kumar </h5>
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>