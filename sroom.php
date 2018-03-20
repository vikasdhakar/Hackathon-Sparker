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
include_once("dbcon.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="erento">
<meta name="keywords" content="erento">
    <meta name="author" content="erento">
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
              font-size: 500%;
              color:darkred;
              font-weight: bold;
          }
          .small
          {
              font-size: 100%;
              font-weight: bold;
          }
          .item
          {
              font-size: 180%;
              color: darkslateblue;
              font-weight: bold;
              text-transform: uppercase;
          }
          .itemg
          {
              font-size: 200%;
              color: darkgreen;
              font-weight: bold;
          }
          .link
          {
              width: 100%;
              
          }
          .imgg{
              width:48%; 
              float: left;
              margin-left: 1%;
          }
          .boxx
          {
              width:100%;
          }
          .imggg{
              width: 100%;
          }
          .des{
              margin-top: 5%;
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
          <center>
          
              
              
      <div class="content">
        
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
            <center>
            <?php
            
                $sql = "select * from hotel where id=".$id;
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
        echo "<div class='caption'>
        <p class='heading'>Hotel ".$row["name"]."</p>
        <br>
        <br>
        <div class='imggg'>
        <img src='img/room/".$row["img1"]."' class='imgg'>
        <img src='img/room/".$row["img2"]."' class='imgg'>
        </div>
        <br>
        <div class='des'>
        <p class='item'> "." City: ".$row["loc"]."</p>
        <p class='item'> Address: ".$row["add"]."</p>
        <p class='itemg'> Rs. ".$row["rent"]." per day</p>
        <p class='item'> Rooms Avalable = ".$row["total"]."</p>
        <p class='small'> Discription: ".$row["fea"]."</p>
        </div>
        </div>";
?>
                </center>
        </div>
      </div>
              <a class="btn-danger btn btn-lg" href="broom.php?id=<?php echo $id; ?>">Book Now</a>
              <br>
              <br>
          </center>
      </div>
      <?php
$conn->close();
            
            ?>
          
          
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
          
<?php
include_once("footer.php");
?>
  </body>
</html>
