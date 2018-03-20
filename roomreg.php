<?php
session_start();
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="erento">
<meta name="keywords" content="erento">
    <meta name="author" content="erento">
    <title>erento | SignUp</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Techstrom theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  <link href="css/loader.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/loader.js"></script>
      
      
    

        
        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
             <script>
function validation()
{
                var CheckboxHandler = new Object();
                CheckboxHandler.isChecked = function (checkboxObj) {
                return(checkboxObj.checked == true);
                };
    var result=true;
    var x=document.getElementById("name");
    if(x.value.length<1)
    {
        document.getElementById('ername').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('ername').innerHTML = '';
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
    var a=document.getElementById("add");
    if(a.value.length<1)
    {
        document.getElementById('eradd').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('eradd').innerHTML = '';
    }
    var b=document.getElementById("num");
    if(b.value.length!=10)
    {
        document.getElementById('ernum').innerHTML = 'Invalid Mobile Number';
        var result=false;
    }
    else{
        document.getElementById('ernum').innerHTML = '';
    }
    if(CheckboxHandler.isChecked(document.getElementById('cbs')))
                {
                    document.getElementById('ertac').innerHTML = '';
                }
                else{
                    var result=false;
                    document.getElementById('ertac').innerHTML = 'Please Read And Accept Terms And Conditions';
                }
	
    return(result);
}
                 function printtac(){
                     alert("Terms And Conditions");
                 }
</script>
  </head>
  <body >
      <div id="preloader">
  <div id="loader"></div>
</div>
      <div id="body" style=" visibility: hidden;">
    <!-- Start: HEADER -->
     <?php
          include_once("header.php");
          ?>
      <!-- End: Navigation wrapper -->   
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="row">
            <center>
          <div style="width:80%">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of e-rento Room Service</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="roomreg2.php" onsubmit="return validation()" onsubmit="validation()">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="<?php if(isset($_SESSION['fbname'])) echo $_SESSION['fbname']; ?>">
                    <center>
                    <div id="ername" style="color: red" ></div><br>
                    </center>
                  <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email" value="<?php if(isset($_SESSION['fbemail'])) echo $_SESSION['fbemail']; ?>">
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
                    <input type="text" class="form-control" name="num" id="num" placeholder="Mobile Number" >
                    <center>
                    <div id="ernum" style="color: red" ></div><br>
                    </center>
                    <input type="text" class="form-control" name="add" id="add" placeholder="Address" >
                    <center>
                    <div id="eradd" style="color: red" ></div><br>
                    </center>
                    <select class="form-control" id="listBox" onchange='selct_district(this.value)'></select><br><br>
                    <select name="city" class="form-control" id='secondlist'></select><br><br>
                  <div>
                      <label for="cbs"><input type="checkbox" name="cbs" id="cbs">I Accept All <a href="#" style="color:red" onclick="printtac()">Terms And Conditions</a></label>
                      <center>
                    <div id="ertac" style="color: red" ></div><br>
                    </center>
                    <input type="submit" name="btn-login" value="Signup" class="btn btn-primary btn-large">
                  </div>
                </form>   
                <h4><i class="icon-question-sign"></i> Already have an Room Seller Account?</h4>
                <a href="roomreg3.php" class="btn btn-large bottom-space">Signin</a>
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  <li>
                    <a href="fb/index.php"class="btn-facebook">
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
                </ul>
              </div>
            </div>
          </div>
                </center>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <?php
include_once("footer.php");
?>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
         <script type="text/javascript" src="js/state.js"></script>
          
          
      </div>
  </body>
</html>
