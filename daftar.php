
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Wisata Cianjur</title>
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/3.5.2/css/animsition.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-pink.min.css">  
    <link rel="stylesheet" href="css/swipebox.min.css">
    <link rel="stylesheet" href="css/style.css">
 
</head>

  <body>
    <div class="animsition">
      <!-- Page Content -->
      <main class="mdl-layout__content login-bg">
        <div class="login mdl-shadow--2dp"> <!-- card -->
          <div class="account-info mdl-color--primary">

            <div class="account-navigation"> <!-- top icons -->
              <!-- <a class="mdl-button mdl-js-button mdl-button--icon left" href="">
                <i class="material-icons">arrow_back</i>
              </a>
              <button class="mdl-button mdl-js-button mdl-button--icon right">
                <i class="material-icons">close</i>
              </button> -->
              <div class="clr"></div>
              <center>
                <h3 style="color:gold"><b>Wisata Cianjur</b></h3>
                <h5 style="margin-top:-24px;"><b>Buat Akun Baru</b></h5>
                <!-- <div class="minilogo-account user1"></div>  -->
                <!-- <span>Silahkan Login</span> -->
              </center>
            </div>
          </div>

          <div class="account-data"> <!-- text fields -->
          <?php
            session_start();
            include "admin/koneksi.php";

            if (isset($_POST['daftar'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $username = $_POST['name'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $cekEmail = mysql_query("SELECT * FROM tb_wisatawan WHERE Email='$email'");
                $hasilEmail = mysql_num_rows($cekEmail);

                 if ($hasilEmail < 1) {
                  $sql="INSERT INTO tb_wisatawan(Nama,Email,Password,No_Hp) VALUES
                  ('$name','$email','$password','$phone')";
                  if(mysql_query($sql)){
                        session_start();
                        $login = mysql_query("SELECT * FROM tb_wisatawan WHERE Email='$email' AND Password='$password'");
                        $hasil = mysql_num_rows($login);
                        $r	   = mysql_fetch_array($login);
                        $_SESSION[Id_Wisatawan] = $r[Id_Wisatawan];
                        $_SESSION[Email] = $r[Email];
                        $_SESSION[Nama] = $r[Nama];
                        $_SESSION[Password]= $r[Password];
                        header('location:home.php');
                    } else {
                        echo '<center><b style="color:red">Tidak bisa melakukan pendaftaran!</b></center>';
                    }
                 } else{
                   echo '<center><b style="color:red">Email sudah terdaftar!</b></center>';

                 }
            }
            ?>
            <form action="#" method="POST">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                <input class="mdl-textfield__input" type="text" id="sample1" name="name" required>
                <label class="mdl-textfield__label" for="sample1"> Full name</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                <input class="mdl-textfield__input" type="text" id="sample1" name="email" required>
                <label class="mdl-textfield__label" for="sample1"> Email</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                <input class="mdl-textfield__input" type="password" id="sample2" name="password" required/>
                <label class="mdl-textfield__label" for="sample2">Password</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                <input class="mdl-textfield__input" type="text" id="sample2" name="phone" required/>
                <label class="mdl-textfield__label" for="sample2">Phone</label>
              </div>
              
            <!-- <a class="left" href="#">Forgot password?</a> -->
            <p>Sudah terdaftar? <a href="index.php">Login Disini</a> </p>
            <input type="submit" name="daftar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary right" value="Daftar">                
              
          
            </form>
            <div class="clr"></div>
            
          </div>

        </div>
      </main>
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/3.5.2/js/jquery.animsition.js"></script>
    <script src="js/sweetalert.min.js"></script> 
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/function.js"></script>
  </body>
</html>
