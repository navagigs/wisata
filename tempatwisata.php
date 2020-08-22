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
      <div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button">
        <header class="mdl-layout__header mdl-layout__header--waterfall">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Wisata Cianjur</span>
            <!-- Spacer -->
            <div class="mdl-layout-spacer"></div>
            <!-- Right Menu -->
            <!-- <button id="top-header-menu" class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">more_vert</i>
            </button> -->
            <a href="tempatwisata.php" id="top-header-menu" class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">refresh</i>
             </a> 
          </div>
        </header>
        <!-- Top-right Dropdown Menu -->
        <!-- <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="top-header-menu">
          <a href="login.html" class="animsition-link"><span class="mdl-menu__item">Login</span></a>
          <a href="messages.html" class="animsition-link"><span class="mdl-menu__item mdl-badge" data-badge="4">Messages</span></a>
          <a href="player.html" class="animsition-link"><span class="mdl-menu__item">Player</span></a>
          <a href="calendar.html" class="animsition-link"><span class="mdl-menu__item">Calendar</span></a>
          <a href="settings.html" class="animsition-link"><span class="mdl-menu__item">Settings</span></a>
        </div> -->
        <!-- Sidebar -->
        <div class="mdl-layout__drawer">
          <!-- Top -->
          <div class="mdl-card mdl-shadow--2dp mdl-color--primary mdl-color-text--blue-grey-50 drawer-profile">
            <div class="mdl-card__title user">
              <img src="img/user.jpg" alt="" />
              <span class="user-name"><?php echo  $_SESSION['Nama'];?></span>
              <span class="user-mail"><?php echo  $_SESSION['Email'];?></span>
              <!-- <button id="user-menu" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">arrow_drop_down</i>
              </button> -->
            </div>
            <!-- Top-right User -->
            <!-- <div class="mdl-card__menu">
              <img class="sub-user" src="img/sub-user.jpg" alt="" />
            </div> -->
          </div>
          <!-- Dropdown Menu -->
          <!-- <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="user-menu">
            <li class="mdl-menu__item">hello@email.com</li>
            <li class="mdl-menu__item">info@domain.net</li>
            <li class="mdl-menu__item">Add another account...</li>
          </ul> -->
          <!-- Main Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link animsition-link" href="home.php"><i class="material-icons">home</i><span>Home</span></a>
            <a class="mdl-navigation__link animsition-link" href="profile.php"><i class="material-icons">account_circle</i><span>Profile</span></a>
            <a class="mdl-navigation__link animsition-link" href="tempatwisata.php"><i class="material-icons">image</i><span>Tempat Wisata</span></a>
            <div class="drawer-separator"></div>
            <a class="mdl-navigation__link animsition-link" href="logout.php"><i class="material-icons">logout</i><span>Logout</span></a>
            
          </nav>
        </div>

        <!-- Page Content -->
        <main class="mdl-layout__content">
          <!-- cards grid -->
          <div class="mdl-grid">
      
            <!-- card with description -->
              <?php
                    include "admin/koneksi.php";
                                    
                    $sql=mysql_query("select * from tb_infowisata order by Id_Wisata desc");
                    while($data=mysql_fetch_array($sql)){                   
                    ?>
            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-card imaged mdl-shadow--2dp">
                <div class="mdl-card__title">
                  <a href="detail.php?id=<?php echo $data['Id_Wisata']; ?>">
                    <?php 
                    $img = 'admin/images/'.$data['image'];
                    if (file_exists($img)) {
                        echo '<img src="'.$img.'" alt="">';
                    } else {
                      echo '<img src="img/noimage.jpg" alt="">';

                    }
                      ?>
                   
                    <h2 class="mdl-card__title-text"><?php echo $data['wisata']; ?></h2>
                  </a>
                  <a href="detail.php?id=<?php echo $data['Id_Wisata']; ?>" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                    <i class="material-icons">arrow_forward</i>
                  </a>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                <?php echo substr($data['Deskripsi'],0, 150)?>...<a href="detail.php?id=<?php echo $data['Id_Wisata']; ?>">Selengkapnya</a>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                  <div class="minilogo user1"></div>
                  <div class="card-author">
                    <span><strong><?php echo $data['wisata']; ?></strong></span>
                    <span><?php echo $data['Alamat']; ?></span>
                  </div>
                </div>
                <div class="mdl-card__menu">
                  <label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect" for="icon-toggle-2">
                    <input type="checkbox" id="icon-toggle-2" class="mdl-icon-toggle__input" checked />
                    <!-- <i class="mdl-icon-toggle__label material-icons">favorite</i> -->
                  </label>
                </div>
              </div>
            </div>
          </div>
                    <?php } ?>
          <!-- load more --> 
          <!-- <a href="article.html" class="load-more mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
            <i class="material-icons">arrow_forward</i>
          </a>    -->
        </main>
      </div>
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/3.5.2/js/jquery.animsition.js"></script>
    <script src="js/sweetalert.min.js"></script> 
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/function.js"></script>
  </body>
</html>
<?php } ?>