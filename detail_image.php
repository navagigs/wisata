<?php 
	session_start();

  if(empty($_SESSION['Email']) AND empty($_SESSION['Password'])) { 
    header('location:index.php');
 } else {
?>
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
  	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-74264063-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
  <body>
    <div class="animsition">
      <!-- Header -->
      <header class="mdl-layout__header mdl-layout__header--waterfall transparent-header no-drawer">
        <div class="mdl-layout__header-row">
          <a href="galeri.php" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">arrow_back</i>
          </a>
          
        </div>
        
      </header>
      <?php
                    include "admin/koneksi.php";
                                    
                    $sql=mysql_query("
                    select 
                    tb_galeri.id, 
                    tb_galeri.image as im, 
                    tb_infowisata.wisata as w, 
                    tb_infowisata.Id_Wisata as Id_Wisata, 
                    tb_infowisata.Alamat,
                    tb_wisatawan.Nama
                    from tb_galeri 
                    INNER JOIN tb_infowisata ON tb_galeri.Id_Wisata = tb_infowisata.Id_Wisata
                    INNER JOIN tb_wisatawan ON tb_galeri.Id_Wisatawan = tb_wisatawan.Id_Wisatawan
                    
                    
                    where id=$_GET[id] 
                    order by id desc
                    ");
                    while($data=mysql_fetch_array($sql)){                   
                    ?>
      <!-- Page Content -->
      <main class="mdl-layout__content"> 
    <div class="article-bg" ></div>
        <div class="article">
          <h4  style="color:gold"><?php echo $data['wisata']; ?></h4>
          <div class="article-content mdl-shadow--2dp">
            <!-- author -->
            <div class="author">
              <?php
            session_start();
            // include "admin/koneksi.php";

            if (isset($_POST['komentar'])) {

                date_default_timezone_set("Asia/Jakarta");
                $komentarnya = $_POST['komentarnya'];
                $Id_Wisatawan= $_SESSION['Id_Wisatawan'];
                $Id_Wisata = $_POST['Id_Wisata'];
                $Id_Galeri = $_POST['Id_Galeri'];
                $waktu = date('Y-m-d H:i:s');
         
                  $sql="INSERT INTO tb_komentar(komentar,Id_Wisatawan,Id_Wisata,Id_Galeri,waktu) VALUES
                  ('$komentarnya','$Id_Wisatawan','$Id_Wisata','$Id_Galeri','$waktu')";
                  if(mysql_query($sql)){
                      echo '<center><b style="color:green">Berhasil membuat komentar!</b></center>';
                    } else {
                        echo '<center><b style="color:red">Tidak bisa membuat komentar!</b></center>';
                    }
                 
            }
            ?>
              <div class="card-author">
                    <span><strong><?php echo $data['w']; ?></strong></span>
                    <span><?php echo $data['Alamat']; ?></span>
              </div>
              <!-- social share -->
              <!-- <div class="share">
                <button class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">favorite</i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">bookmark</i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">reply</i>
                </button>
              </div> -->
              <div class="clr"></div>
            </div>
            <div class="drawer-separator"></div>
            <!-- article content -->
            <?php 
                    $img = 'admin/images/'.$data['im'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
              ?>
        
            <span class="comment-count">Komentar</span>
            <div class="drawer-separator"></div>
           
            <div class="author comment">
            <?php
              $sql=mysql_query("select * from tb_komentar 
              INNER JOIN tb_wisatawan ON tb_komentar.Id_Wisatawan = tb_wisatawan.Id_Wisatawan
              
              where tb_komentar.Id_Galeri=$_GET[id]  order by waktu desc");
              while($datakomentar=mysql_fetch_array($sql)){                   
            ?>
              <div class="minilogo user2"></div>
              <div class="card-author">
                <span><strong><?php echo $datakomentar['Nama'];?></strong></span>
                <span><?php echo $datakomentar['waktu'];?></span>
              </div>
              <div class="clr"></div>
              <p><?php echo $datakomentar['komentar'];?></p>
             <?php } ?>
            </div>
            <br>
          </div>
        </div>
   <!-- write message fixed bottom -->
         <div class="write-message mdl-shadow--2dp">
            <form action="#" method="POST">
              <!-- <button class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">attach_file</i>
              </button> -->
          
              <div class="mdl-textfield mdl-js-textfield textfield-demo">
                <input class="mdl-textfield__input" type="text" id="sample3" name="komentarnya" required/>
                <input type="hidden" value="<?php echo $data['Id_Wisata'];?>" name="Id_Wisata">
                <input type="hidden" value="<?php echo $_GET['id'];?>" name="Id_Galeri">
                <label class="mdl-textfield__label" for="sample3">komentar...</label>
              </div>
            
            <button name="komentar" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored send">
              <i class="material-icons">send</i>
            </button>
            </form>
          </div>

      </main>
     
                    <?php } ?>
    </div>
<style>
    #map {
        height: 300px;
      }
  </style>

    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANMLvkie_kof27x2YqqF6ABU8Y3BIxmfI&callback=initMap">
    </script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/3.5.2/js/jquery.animsition.js"></script>
    <script src="js/sweetalert.min.js"></script> 
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/function.js"></script>
   
  </body>
</html>
    <?php } ?>