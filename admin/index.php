<?php
session_start();
error_reporting(0);
include "koneksi.php";

if (isset($_POST['login'])){
	//koneksi terpusat
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);




	
	$admin = mysql_query("select * from tb_staff where username='$username' and password='$password'");
//10 query untuk mencocokan, apakah data ada di dalam database atau tidak
$tot= mysql_num_rows($admin);
$r= mysql_fetch_array($admin);
if ($tot > 0) {//jika data ada maka akan diproses
 $_SESSION['Nama_Staff'] = $r['Nama_Staff'];
 $_SESSION['id'] = $r['user_id'];
 $_SESSION['uname'] = $username;
 $_SESSION['passwd'] = $password;

 {
echo '<script type="text/javascript">
alert("Selamat Datang"); </script>';
echo"<script>location.href='media.php?page=home'</script>";
 }
 
}
else{
?>
<script>alert('Username atau Password salah.. !!!');</script>
<?php
}
}else{
	unset($_POST['login']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
     <link rel="shortcut icon" href="icon.jpg">

    <title>LOGIN | Wisata Cianjur</title>

    <!-- pemanggilan direktory file bootstrap.css -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- pemanggilan direktory file css font-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- pemanggilan direktori file css custom template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">




    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
    		  <form class="form-login" method="post" action="index.php">
		        <h2 class="form-login-heading"> <span class="glyphicon glyphicon-lock"></span> LOGIN ADMIN</h2>
                <center><h5> <span class="glyphicon glyphicon-qrcode"></span>Wisata Cianjur<span class="glyphicon glyphicon-qrcode"></span></h5></center>
		       <div class="login-wrap">
		           
      
                <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                 <br />
                <input type="password" name="password" class="form-control" placeholder="Password">
           
      
                    <br />
                    <button class="btn btn-lg btn-info btn-block" type="submit" name="login">MASUK</button>
		           
          	  	 <hr>
		            <div class="login-social-link centered">
		            
		            </div>
		      
		            
		                  <center>  Copyright &copy; Info Wisata Cianjur 2020 </center>
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		        <!--  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <!-- Pemanggilan Background Login Form-->
    <script>
        $.backstretch("images/back/2.jpg", {speed: 500});
    </script>


  </body>
</html>
