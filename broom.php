<?php
session_start();
if(!isset($_GET["id"])){
    header('location: room.php');
}
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
$id=$_GET["id"];
$i=0;
include_once("dbcon.php");
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
          
              
              
      <div class="content">
        
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
            <form method="post" action="broom2.php" onsubmit="return validation()" onsubmit="validation()">
            
            <?php
        
            
                $sql = "select * from hotel where id=".$id;
                $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                $hname = $row["name"];
                ?>
                <p class="heading">Hotel <?php echo $hname; ?></p>
                <input type="hidden" name="price" value="<?php echo $row['rent']; ?>" />
                <input type="hidden" name="aval" id="aval" value="<?php echo $row['total']; ?>" />
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" />
                
            <?php
            }
            ?>
            <br>
                <br>
                <br>
              <br>
              <br>
                <div class="link">
            <div class="link2" style="width:40%">
                    <label for="email" class="control-label iteml">No Of Rooms To Book</label>
                <br>
                    <input type="text" name="nor" id="nor" class="form-control" autocomplete="off">
                    <div id="ernor" style="color: red" ></div>
                    <div id="ernor2" style="color: red" ></div>
                </div>
                <div class="link2" style="width:40%">
                    <label for="email" class="control-label iteml">No of Days for Booking</label>
                    <br>
                    <input type="text" name="nod" id="nod" class="form-control" autocomplete="off">
                    <div id="ernod" style="color: red" ></div>
                </div>
                    </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <input type="submit" name="btn-login" value="Proceed" class="btn btn-primary">
                </div>
                <br>
        </form>
        </div>
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
