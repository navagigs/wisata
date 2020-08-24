  
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
             <a href="home.php" id="top-header-menu" class="mdl-button mdl-js-button mdl-button--icon">
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
            <a class="mdl-navigation__link animsition-link" href="tempatwisata.php"><i class="material-icons">location_on</i><span>Tempat Wisata</span></a>
            <a class="mdl-navigation__link animsition-link" href="galeri.php"><i class="material-icons">image</i><span>Galeri</span></a>
            <div class="drawer-separator"></div>
            <a class="mdl-navigation__link animsition-link" href="logout.php"><i class="material-icons">logout</i><span>Logout</span></a>
            
          </nav>
        </div>

        <!-- Page Content -->
        <main class="mdl-layout__content">

          <div class="contact-about">
          <div class="mdl-card mdl-shadow--2dp about">
            <h4>Selamat Datang</h4>
            <p></p> 
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            <?php echo  $_SESSION['Nama'];?>
            </button>
          </div>
          <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-grid">
              <!-- <div class="mdl-cell mdl-cell--4-col">
                <a href="home.php" class="no-accent-color" href="tel:1234567890"><i class="material-icons">home</i></a>
                <span>Home</span>
              </div> -->
              <div class="mdl-cell mdl-cell--4-col">
                <a href="profile.php" class="no-accent-color" href="sms://1234567890"><i class="material-icons">account_circle</i></a>
                <span>Profile</span>
              </div>
              <div class="mdl-cell mdl-cell--4-col">
                <a href="tempatwisata.php" class="no-accent-color" href="sms://1234567890"><i class="material-icons">location_on</i></a>
                <span>Tempat Wisata</span>
              </div>
              <div class="mdl-cell mdl-cell--4-col">
                <a href="galeri.php" class="no-accent-color" href="sms://1234567890"><i class="material-icons">image</i></a>
                <span>Galeri</span>
              </div>
            </div>
          </div>
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