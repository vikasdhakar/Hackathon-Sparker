<?php
session_start();
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
include_once('dbcon.php');

if(isset($_POST['btn-login'])){
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    
        $sql = "select * from hckreg where id='.$id.' or email='".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
            

                if($row['pass'] == $pass){
                $_SESSION['username'] = $row['name'];
                $_SESSION['userid'] = $row['id'];
                $_SESSION['useremail'] = $row['email'];
                header('location: index.php');
                }
                else{
                $eMsg = 'Invalid Username or Password';
                }

            }
        }
        else {
            $eMsg = 'Account With This Email Does Not Exist';
        }
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
    <title>erento | Login</title>
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
    var result=true;
    var x=document.getElementById("id");
    if(x.value.length<1)
    {
        document.getElementById('er').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('er').innerHTML = '';
    }
    var d=document.getElementById("pass");
    if(d.value.length<1)
    {
        document.getElementById('erp').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erp').innerHTML = '';
    }
    return(result);
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
         <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Welcome to Rajasthan Tourism</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validation()" onsubmit="validation()">
                  <?php
                    if(isset($eMsg)){
                        ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $eMsg; ?>
                        </div>
                        <?php
                    }
                ?>
                    <?php
                    if(isset($_GET["msg"])){
                        ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $_GET["msg"]; ?>
                        </div>
                        <?php
                    }
                ?>
                    <input type="text" name="id" id ="id" placeholder="User ID">
                    <center>
                    <div id="er" style="color: red" ></div><br>
                    </center><br>
                    <input type="password" name="pass" id="pass" placeholder="Password">
                    <center>
                    <div id="erp" style="color: red" ></div><br>
                  <div>
                    <input type="submit" value="Sign In" name="btn-login" class="btn btn-primary btn-large">
                  </div>
                    </center>
                </form>
                <h4><i class="icon-question-sign"></i> Don't have an account?</h4>
                <a href="signup.php" class="btn btn-large bottom-space">Signup</a>
                    
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
         <?php
include_once("footer.php");
?>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
          
          
      </div>
  </body>
</html>
