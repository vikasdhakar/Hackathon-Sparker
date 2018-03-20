<?php
session_start();
if(isset($_POST['btn-login'])){
    $email= ($_POST['email']);
    $name=($_POST['name']);
    $pass = ($_POST['pass']);
    echo $email;
    echo $name;
    echo $pass;
    $passe = base64_encode($pass);
    $emaile = base64_encode($email);
    $namee = base64_encode($name);
    echo $emaile;
    echo $namee;
    echo $passe;
    $to = $email;
    $headers = "from: gurpindersingh0009@gmail.com";
    $subject = "Techstrom Email Conformation";
    $message = "http://techstromgecj.com/reg.php?x=".$namee."&y=".$emaile."&z=".$passe;
    echo $message;
    if(mail($to,$subjecj,$message,$headers))
    {
        $Msg="Please Validate Your Acoount By Link Send To Your Email Address";
    }
    else
    {
        $Msg="There Was An Error Proceding Your Request";
    }
    
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Techstrom | Signup</title>
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
    var x=document.getElementById("name");
    if(x.value.length<1)
    {
        document.getElementById('ername').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erfname').innerHTML = '';
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
    var y=document.getElementById("pass");
    var z=document.getElementById("cpass");
    if(y.value.length<8)
    {
        document.getElementById('erpass').innerHTML = 'Length Should Atleast 8 characters';
        var result=false;
    }
    else{
        document.getElementById('erpass').innerHTML = '';
    }
    if(y.value != z.value)
    {
        document.getElementById('ercpass').innerHTML = 'Please Enter Same Password';
        var result=false;
    }
    else{
        document.getElementById('ercpass').innerHTML = '';
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
                

             
                    <li><a href="about.html">About us</a></li>
					<li><a href="events.html">Event</a></li>   

           
                
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
          <h1>Signup to Techstrom</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of Techstrom</h4>
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
                  <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                    <center>
                    <div id="ername" style="color: red" ></div><br>
                    </center>
                  <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email">
                    <center>
                    <div id="eremail" style="color: red" ></div><br>
                    </center>
                  <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                    <center>
                    <div id="erpass" style="color: red" ></div><br>
                    </center>
                  <input type="password" class="form-control" name="password_confirmation" id="cpass" placeholder="Password Confirmation">
                    <center>
                    <div id="ercpass" style="color: red" ></div><br>
                    </center>
                  <div>
                    <input type="submit" name="btn-login" value="Signup" class="btn btn-primary btn-large">
                  </div>
                </form>
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <a href="signin.html" class="btn btn-large bottom-space">Signin</a>
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  <li>
                    <a class="btn-twitter">
                      <i class="icon-twitter icon-large"></i>
                      Signin with Twitter
                    </a>
                  </li>
                  <li>
                    <a class="btn-facebook">
                      <i class="icon-facebook icon-large"></i>
                      Signin with Facebook
                    </a>
                  </li>
                  <li>
                    <a class="btn-google">
                      <i class="icon-google-plus icon-large"></i>
                      Signin with Google
                    </a>
                  </li>
                  <li>
                    <a class="btn-github">
                      <i class="icon-github icon-large"></i>
                      Signin with Github
                    </a>
                  </li>
                </ul>
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