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
  <body>
      <div id="preloader">
  <div id="loader"></div>
</div>
      <div id="body" style=" visibility: hidden;">
    <!-- Start: HEADER -->
     <?php
          include_once("header.php");
          ?>
          <br>
          <center>
		  <div align="center">
  <IMG src="./home/banner1/1.jpg" height="50px" width="700px" id="image" />
			<SCRIPT type="text/javascript">
				setInterval(ChangeImage,2400);
				function ChangeImage(){
					var imgsrc = document.getElementById('image').getAttribute("src");
					var cimgno = imgsrc.substring(imgsrc.lastIndexOf("/")+1,imgsrc.lastIndexOf("/")+2);
					if(cimgno == "5"){
						cimgno="0";
					}
					var nextimgno =parseInt(cimgno)+1;
					var nextimg ="./home/banner1/"+nextimgno+".jpg";
					document.getElementById("image").setAttribute("src",nextimg) ;
				}
			</SCRIPT>
  </div>
   
          <div style="width:65%;">
              <br><br>
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="room.php" onsubmit="return validation()" onsubmit="validation()">
                    <table width="50%" align="center">
					<tbody>
					<tr>
						<td>Select type of room</td>
						<td><input type="radio" name="type" value="ac" checked> AC Room
						<td><input type="radio" name="type" value="nac"> Non-AC
                    </tr>
                    <tr><td><b>Select City</b>
					<td colspan="2">
                    <select class="quan" name="loc" id="loc" >
		              <option value="Ajmer">Ajmer</option>
		              <option value="Alwar">Alwar</option>
		              <option value="Chittorgarh">Chittorgarh</option>
		              <option value="jaipur">Jaipur</option>
		              <option value="jodhpur">Jodhpur</option>
                        <option value="Udaipur">Udaipur</option>
                        <option value="Mount Abu">Mount Abu</option>
                        <option value="Kota">Kota</option>
                        <option value=" Jaisalmer"> Jaisalmer</option>
                    </select>
					</tr>
                   <tr>
                    <td colspan="3"><br><input type="submit" name="btn-login" value="Search" class="btn btn-primary btn-large" >
					</tr>
					
					</tbody>
				  </table>
                </form>
              </div>
              
              
      </div>
	 
          </center>
          <br>
          <br>
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
