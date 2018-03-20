<?php
session_start();
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
?>
<?php
include_once('dbcon.php');
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$num = $_POST["num"];
$add = $_POST["add"];
$city = $_POST["city"];
/*$pass = base64_decode($passe);
$email = base64_decode($emaile);
$name = base64_decode($namee);
$num = base64_decode($nume);
$col = base64_decode($cole);
$city = base64_decode($citye);
$ambid = base64_decode($ambide);*/

$sql = "SELECT * FROM reg where email='".$email."'";
    if($result = $conn->query($sql))
    {
        if ($result->num_rows > 0) {

            $Msg="Account With This Email Already Exists";

        }
        else {
            $sql = "INSERT INTO hckreg (name,email,pass,num,addr,city)
            VALUES ('$name','$email','$pass','$num','$add','$city')";

            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                $Msg = "Account Crated Sucesfully successfully. Your ID is: " . $last_id;
                header('location: login.php?msg='.$Msg);
            } else {
                $Msg = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
$conn->close();


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
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
        
        <br>
        <br>
        <br>
        <center>
            <?php
            
            if(isset($Msg))
            {
            ?>
        <h1 style="color: darkblue"><?php echo $Msg; ?></h1>
            <br>
            <br>
            <h3>After Some Days List of All Workshops And Events will be avalible on the Website.<br>Then You will be able to Participate in the event</h3>
        <?php
            }
            ?>
            </center>
        <br><br><br>
      
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
