<?php
session_start();
if(!isset($_POST["id"])){
    header('location: room.php');
}
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
$id=$_POST["id"];
$aval=$_POST["aval"];
$total=$_POST["total"];
$nor=$_POST["nor"];
$nod=$_POST["nod"];
$i=0;
$lroom=$total-$nor;
include_once("dbcon.php");

for($i=1;$i<=$nor;$i++){
    sql="update hroom set status=1 where hid=".$id.""
}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>e-rento | Room</title>
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
        var e=document.getElementById("nor");
        var aval=document.getElementById("aval").value;
        if(e.value.length<1)
        {
            document.getElementById('ernor').innerHTML = 'Cannot Be Empty';
            var result=false;
        }
        else{
            document.getElementById('ernor').innerHTML = '';
        }
    if(e.value>aval)
        {
            document.getElementById('ernor2').innerHTML = 'Not Enought Rooms Avalible';
            var result=false;
        }
        else{
            document.getElementById('ernor2').innerHTML = '';
        }
    var f=document.getElementById("nod");
        if(f.value.length<1)
        {
            document.getElementById('ernod').innerHTML = 'Cannot Be Empty';
            var result=false;
        }
        else{
            document.getElementById('ernod').innerHTML = '';
        }
        return(result);
}
</script>
      <style>
          .round{
              color: white;
          }
          .linkk{
              border: 1% solid black;
          }
          .linkkimg{
              width: 60%;
              
                  
          }
          .quan
          {
              width: 100%;
          }
          .heading
          {
              font-size: 350%;
              color:darkred;
              font-weight: bold;
          }
          .small
          {
              font-size: 100%;
              font-weight: bold;
              color: black;
          }
          .item
          {
              font-size: 130%;
              color: black;
              font-weight: bold;
              text-transform: uppercase;
          }
          .link
          {
              width: 120%;
              
          }
          .imgg{
              width:48%; 
              float: left;
              margin-left: 1%;
          }
          .boxx
          {
              width:46%;
          }
          .itemg
          {
              font-size: 200%;
              color: darkgreen;
              font-weight: bold;
          }
          .iteml
          {
              font-size: 250%;
              color:black;
              font-weight: bold;
          }
          .link2{
              width:50%;
              float:left;
          }
          .imggg{
              width: 100%;
          }
      </style>
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
          <br>
              <br>
          
          <center>
          
              
              
      <div class="container">
        
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <table class="table table-bordered">
            <tr>
            <th width="20%">Hotel ID</th>
                <th width="20%">No Of Rooms</th>
                <th width="20%">Total Number of Days</th>
                <th width="20%">Rent Per Day</th>
                <th width="20%">Total Amount</th>
            </tr>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nor; ?></td>
                    <td><?php echo $nod; ?></td>
                    <td><?php echo $rent." Rs"; ?></td>
                    <td><?php echo ($nor*$rent*$nod)." Rs"; ?></td>
                </tr>
            
            </table>
            <form method="post" action="success.php">
                <input type="hidden" name="nor" value="<?php echo $nor; ?>" />
                <input type="hidden" name="nod" value="<?php echo $nod; ?>" />
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="aval" value="<?php echo $aval; ?>" />
                <input type="hidden" name="total" value="<?php echo ($rent*$nor*$nod); ?>" />
            <div class="form-group">
                    <input type="submit" name="btn-login" value="Proceed To Pay" class="btn btn-primary">
                </div>
            </form>
      </div>
          </center>
      </div>
          
          
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
          
<?php
include_once("footer.php");
?>
  </body>
</html>
