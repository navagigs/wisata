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
          <a href="tempatwisata.php" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">arrow_back</i>
          </a>
          
        </div>
        
      </header>
      <?php
                    include "admin/koneksi.php";
                                    
                    $sql=mysql_query("select * from tb_infowisata where Id_Wisata=$_GET[id]  order by Id_Wisata desc limit 5");
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
              <div class="minilogo user1"></div>
              <?php
            session_start();
            // include "admin/koneksi.php";

            if (isset($_POST['ulasan'])) {

                date_default_timezone_set("Asia/Jakarta");
                $ulasannya = $_POST['ulasannya'];
                $Id_Wisatawan= $_SESSION['Id_Wisatawan'];
                $Id_Wisata = $_POST['Id_Wisata'];
                $waktu = date('Y-m-d H:i:s');
         
                  $sql="INSERT INTO tb_ulasan(ulasan,Id_Wisatawan,Id_Wisata,waktu) VALUES
                  ('$ulasannya','$Id_Wisatawan','$Id_Wisata','$waktu')";
                  if(mysql_query($sql)){
                      echo '<center><b style="color:green">Berhasil membuat ulasan!</b></center>';
                    } else {
                        echo '<center><b style="color:red">Tidak bisa membuat ulasan!</b></center>';
                    }
                 
            }
            ?>
              <div class="card-author">
                    <span><strong><?php echo $data['wisata']; ?></strong></span>
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
                    $img = 'admin/images/'.$data['image'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
              ?>
                
            <br><br><b>Deskripsi :</b>
            <p><?php echo $data['Deskripsi'];?></p>

            <script>
      function initMap() {
        var myLatlng = {lat: <?php echo $data['latitude'];?>, lng: <?php echo $data['longitude'];?>};

        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 10, center: myLatlng});

        // Create the initial InfoWindow.
        var infoWindow = new google.maps.InfoWindow(
            {content: '<?php echo $data['wisata']; ?>', position: myLatlng});
        infoWindow.open(map);

        // Configure the click listener.
        map.addListener('click', function(mapsMouseEvent) {
          // Close the current InfoWindow.
          infoWindow.close();

          // Create a new InfoWindow.
          infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
          infoWindow.setContent(mapsMouseEvent.latLng.toString());
          infoWindow.open(map);
        });
      }
    </script>
            <br><b>Lokasi :</b><div id="map"></div>

            
            <br><br><b>Budaya :</b>
            <p><?php echo $data['Nama_Budaya'];?></p>
            <?php 
                    $img = 'admin/images/'.$data['image4'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
              ?>
           <br><br><b>Kuliner :</b>
            <p><?php echo $data['Nama_Kuliner'];?></p>
            <?php 
                    $img = 'admin/images/'.$data['image3'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
              ?>

            
           <br><br><b>Penginapan :</b>
            <p><?php echo $data['Nama_Penginapan'];?></p>
            <?php 
                    $img = 'admin/images/'.$data['image2'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
              ?>

            <h3>Rute</h3>
          <b>Bandung :</b>
            <p><?php echo $data['bdg'];?></p>
           <br><b>Sukabumi :</b>
            <p><?php echo $data['sukabumi'];?></p>
           <br><b>Bogor :</b>
            <p><?php echo $data['bogor'];?></p>
            <span class="comment-count">Ulasan</span>
            <div class="drawer-separator"></div>
           
            <div class="author comment">
            <?php
              $sql=mysql_query("select * from tb_ulasan 
              INNER JOIN tb_wisatawan ON tb_ulasan.Id_Wisatawan = tb_wisatawan.Id_Wisatawan
              
              where tb_ulasan.Id_Wisata=$_GET[id]  order by Id_Wisata desc");
              while($dataUlasan=mysql_fetch_array($sql)){                   
            ?>
              <div class="minilogo user2"></div>
              <div class="card-author">
                <span><strong><?php echo $dataUlasan['Nama'];?></strong></span>
                <span><?php echo $dataUlasan['waktu'];?></span>
              </div>
              <div class="clr"></div>
              <p><?php echo $dataUlasan['ulasan'];?></p>
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
                <input class="mdl-textfield__input" type="text" id="sample3" name="ulasannya" required/>
                <input type="hidden" value="<?php echo $data['Id_Wisata'];?>" name="Id_Wisata">
                <label class="mdl-textfield__label" for="sample3">Ulasan...</label>
              </div>
            
            <button name="ulasan" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored send">
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