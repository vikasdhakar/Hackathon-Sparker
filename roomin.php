<?php
session_start();
if(!isset($_SESSION['username'])){
    $status=0;
}
else{
    $status=1;
}
if(!isset($_SESSION['roomusername'])){
    header('location: roomreg.php');
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
    var result=true;
    var x=document.getElementById("loc2");
    if(x.value.length<1)
    {
        document.getElementById('erloc2').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erloc2').innerHTML = '';
    }
    var d=document.getElementById("rent");
    if(d.value.length<1)
    {
        document.getElementById('errent').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('errent').innerHTML = '';
    }
    var a=document.getElementById("fea");
    if(a.value.length<1)
    {
        document.getElementById('erfea').innerHTML = 'Cannot Be Empty';
        var result=false;
    }
    else{
        document.getElementById('erfea').innerHTML = '';
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
    var img1 = document.getElementById("img1");
    if(img1.value=="")
    {
        document.getElementById('erimg1').innerHTML = 'Please Upload An Image';
        var result=false;
    }
    else{
        document.getElementById('erimg1').innerHTML = '';
    }
    var allow = ['jpeg','jpg'];
    var valid1 = false;
    var ima1=document.getElementById("img1").value.split('.').pop().toLowerCase();
            for(var index in allow)
                {
                    if(ima1==allow[index])
                        {
                            valid1=true;
                            break;
                        }
                }
            if (valid1==false)
                {
                    document.getElementById('erimg1').innerHTML = 'Please Upload An Image In Jpeg or Jpg Format';
                    var result=false;
                }
    var img2 = document.getElementById("img2");
    if(img2.value=="")
    {
        document.getElementById('erimg2').innerHTML = 'Please Upload An Image';
        var result=false;
    }
    else{
        document.getElementById('erimg2').innerHTML = '';
    }
    var valid2 = false;
    var ima2=document.getElementById("img2").value.split('.').pop().toLowerCase();
            for(var index in allow)
                {
                    if(ima2==allow[index])
                        {
                            valid2=true;
                            break;
                        }
                }
            if (valid2==false)
                {
                    document.getElementById('erimg2').innerHTML = 'Please Upload An Image In Jpeg or Jpg Format';
                    var result=false;
                }
    var img3 = document.getElementById("img3");
    if(img3.value=="")
    {
        document.getElementById('erimg3').innerHTML = 'Please Upload An Image';
        var result=false;
    }
    else{
        document.getElementById('erimg3').innerHTML = '';
    }
    var valid3 = false;
    var ima3=document.getElementById("img3").value.split('.').pop().toLowerCase();
            for(var index in allow)
                {
                    if(ima3==allow[index])
                        {
                            valid3=true;
                            break;
                        }
                }
            if (valid3==false)
                {
                    document.getElementById('erimg3').innerHTML = 'Please Upload An Image In Jpeg or Jpg Format';
                    var result=false;
                }
    var img1 = document.getElementById("img4");
    if(img4.value=="")
    {
        document.getElementById('erimg4').innerHTML = 'Please Upload An Image';
        var result=false;
    }
    else{
        document.getElementById('erimg4').innerHTML = '';
    }
    var valid4 = false;
    var ima4=document.getElementById("img4").value.split('.').pop().toLowerCase();
            for(var index in allow)
                {
                    if(ima4==allow[index])
                        {
                            valid4=true;
                            break;
                        }
                }
            if (valid4==false)
                {
                    var result=false;
                    document.getElementById('erimg4').innerHTML = 'Please Upload An Image In Jpeg or Jpg Format';
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
              font-size: 250%;
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
          .imgg{
              width: 45%;
              float: left;
          }
          .boxx
          {
              width:45%;
          }
          .warning{
              color: red;
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
      <!-- End: Navigation wrapper -->   
    <!-- Start: MAIN CONTENT -->
          <center>
    <div class="content" style="width:90%">
        <center>
            <p class="heading"> Post Your Room</p>
            <p class="warning small">* Image Size Should not Exceed 1MB</p>
            <div class="widget-body">
              <div class="center-align"  style="width:90%">
                <form class="form-horizontal form-signin-signup" method="post" action="upload.php" onsubmit="return validation()" onsubmit="validation()" enctype="multipart/form-data">
                  <input class="form-control" name="id" id="id" value="<?php if(isset($_SESSION['roomuserid'])) echo $_SESSION['roomuserid']; ?>">
                    <input class="form-control" name="name" id="name" value="<?php if(isset($_SESSION['roomusername'])) echo $_SESSION['roomusername']; ?>">
                    <p class="item">Select Locality</p>
                    <select class="quan" style="width:50%" name="loc" id="loc" onchange="startcl()">
		              <option value="Nayapura">Nayapura</option>
		              <option value="Gumanpura">Gumanpura</option>
                        <option value="Mahavir Nagar-1">Mahavir Nagar-1</option>
                        <option value="Mahavir Nagar-2">Mahavir Nagar-2</option>
                        <option value="Mahavir Nagar-3">Mahavir Nagar-3</option>
                        <option value="Talwandi">Talwandi</option>
                    </select>
                    <br>
                    <br>
                    <br>
                  <input type="text" class="form-control input-lg" name="loc2" id="loc2" placeholder="Adress in Locality">
              <br>
                    <center>
                    <div id="erloc2" style="color: red" ></div><br>
                    </center>
              <input type="text" class="form-control input-lg" name="rent" id="rent" placeholder="Rent">
              <br>
                    <center>
                    <div id="errent" style="color: red" ></div><br>
                    </center>
              <input type="text" class="form-control input-lg" name="num" id="num" placeholder="Owner Mobile Number">
              <br>
                    <center>
                    <div id="ernum" style="color: red" ></div><br>
                    </center>
              <input type="text" class="form-control input-lg" name="fea" id="fea" placeholder="Discription">
              <br>
                    <center>
                    <div id="erfea" style="color: red" ></div><br>
                    </center>
                    <br>
                    <input type="file" name="img1" id="img1">
                    <br>
                    <center>
                    <div id="erimg1" style="color: red" ></div><br>
                    </center>
                    <br>
                    <br>
                    <input type="file" name="img2" id="img2">
                    <br>
                    <center>
                    <div id="erimg2" style="color: red" ></div><br>
                    </center>
                    <br>
                    <br>
                    <input type="file" name="img3" id="img3">
                    <br>
                    <center>
                    <div id="erimg3" style="color: red" ></div><br>
                    </center>
                    <br>
                    <br>
                    <input type="file" name="img4" id="img4">
                    <br>
                    <center>
                    <div id="erimg4" style="color: red" ></div><br>
                    </center>
                    <br>
                  <div>
                    <input type="submit" name="btn-login" value="Post Add" class="btn btn-primary btn-large">
                  </div>
                </form>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    
          
          </center>
      </div>
              <center>
              </center>
          </center>
      </div>
      <?php
include_once("footer.php");
?>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
         <script type="text/javascript" src="js/state.js"></script>
  </body>
</html>
