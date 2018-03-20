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
    <title>e-rento | Room</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Techstrom theme -->
    <link href="../css/boot-business.css" rel="stylesheet">
  <link href="../css/loader.css" rel="stylesheet">
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript" src="../js/loader.js"></script>
        <!-- THEME STYLES -->
        <link href="../css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
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
        document.getElementById('ername').innerHTML = '';
    }
    var c=document.getElementById("amu");
    if(c.value.length<1)
    {
        document.getElementById('eramu').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('eramu').innerHTML = '';
    }
    var c=document.getElementById("item");
    if(c.value.length<1)
    {
        document.getElementById('eritem').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('eritem').innerHTML = '';
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
	
    return(result);
}
          function amountt(){
              var d=document.getElementById("amu");
              var a1=d.value;
        a2=(a1*11)/100;
        a3=3;
        a4=(parseInt(a1)+parseInt(a2)+parseInt(a3));
        document.getElementById('amount').value = a4;
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
              font-size: 200%;
              color: black;
              font-weight: bold;
          }
          .small
          {
              font-size: 100%;
              font-weight: bold;
          }
          .item
          {
              font-size: 150%;
              color: black;
              font-weight: bold;
          }
          .link
          {
              width: 100%;
              
          }
          .add{
              padding: 2%;
              color:brown;
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
          include_once("../header.php");
          ?>
          <br>
              <br>
              <br>
          <br>
              <br>
              <br>
          <center>
          <div style="width:65%;">
              
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="payment.php" onsubmit="return validation()" onsubmit="validation()">
                  <input type="text" class="form-control" name="item" id="item" placeholder="Purpose To Pay">
                    <center>
                    <div id="eritem" style="color: red" ></div><br>
                    </center>
                    <br>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    <center>
                    <div id="ername" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="text" class="form-control"  id="amu" placeholder="Amount" onchange="amountt()">
                    <center>
                    <div id="eramu" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    <center>
                    <div id="eremail" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="text" class="form-control" name="num" id="num" placeholder="Mobile Number">
                    <center>
                    <div id="ernum" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="text" class="form-control" name="add" id="add" placeholder="Delivery Address">
                    <center>
                    <div id="eradd" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="text" class="form-control" name="amount" id="amount" value="0">
                    <div style="color: red" >11% Tax + 3 Rs</div><br>
                    <br>
                    <br>
                  <div>
                    <input type="submit" name="btn-login" value="Search" class="btn btn-primary btn-large">
                  </div>
                </form>
              </div>
              
              
      </div>
          </center>
          <br>
      </div>
          
          
    <!-- End: FOOTER -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/boot-business.js"></script>
          
<?php
include_once("../footer.php");
?>
  </body>
</html>
