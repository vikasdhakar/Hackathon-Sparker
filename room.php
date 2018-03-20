<?php
session_start();
if(!isset($_POST["loc"])){
    header('location: room.php');
}
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
$type=$_POST["type"];
$loc=$_POST["loc"];
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
              width: 100%;
              
          }
          .imgg{
              width:60px;
              height:250px;
              float: left;
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
              <br>
          <br>
              <br>
              <br>
          <center>
          
              
              
      <div class="content">
        
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
            <ul class="thumbnails">
            <?php
            
                $sql = "select * from hotel where loc='".$loc."' and type='".$type."'";
                $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$i++;
        echo "<li class='boxx'><div class='thumbnail'><a href='sroom.php?id=".$row["id"]."'><div class='caption'><img src='img/room/".$row["img1"]."' class='imgg'> <p class='heading'>Hotel ".$row["name"]."</p><p class='item'> "." Location: ".$row["loc"]."</p><p class='itemg'> Rs. ".$row["rent"]." per day</p><p class='item'> Rooms Avalable = ".$row["total"]."</p><p class='small'> - Discription: ".$row["fea"]."</p></p></div></div></a></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
            
            ?>
            </ul>
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
