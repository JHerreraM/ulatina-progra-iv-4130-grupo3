<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="../images/favicon.png" />
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/jquery-ui.css" type="text/css" media="all">        
        
    <!-- <script type="text/javascript" src="../js/jquery-1.4.2.js" ></script> -->
    <script type="text/javascript" src="../js/jquery-1.8.3.js" ></script> 
    <script type="text/javascript" src="../js/jquery-ui.js" ></script> 
    <script type="text/javascript" src="../js/cufon-yui.js"></script>
    <script type="text/javascript" src="../js/cufon-replace.js"></script> 
    <script type="text/javascript" src="../js/Myriad_Pro_italic_600.font.js"></script>
    <script type="text/javascript" src="../js/Myriad_Pro_italic_400.font.js"></script>
    <script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-timepicker-addon.js" ></script> 
    
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="../js/html5.js"></script>
    <![endif]-->
    
  </head>
  <body>
      <div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="home" id="logo">Air Lines</a><span id="slogan">Viajes Locales</span>
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="../backend/auth"><img src="../images/backEnd.jpg"  width="25" height="25" alt=""></a></li>
							<li><a href="contacto"><img src="../images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="login"><img src="../images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="home">Home</a></li>
							<li><a href="nosotros">Nosotros</a></li>
							<li><a href="reservacion">Reservaciones</a></li>
							<li><a href="contacto">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			Pasi&oacute;n Por<span>Volar</span><p>Siempre a tiempo en el Destino</p>
		</div>
		<a href="#" class="button_top">Ordenar Tiquetes Online</a>
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
<?php echo $sf_content ?>  
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!-- footer -->
		<footer>
			Website dise&ntilde;ado por <a href="" target="_blank" rel="nofollow">Grupo 3 Programaci&oacute;n 4 ULatina</a><br>
			
		</footer>
<!-- / footer -->
	</div>
</div>
<!-- <script type="text/javascript"> Cufon.now(); </script> -->
</body>
</html>



