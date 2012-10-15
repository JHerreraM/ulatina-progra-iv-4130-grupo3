<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
    <script type="text/javascript" src="../js/cufon-yui.js"></script>
    <script type="text/javascript" src="../js/cufon-replace.js"></script> 
    <script type="text/javascript" src="../js/Myriad_Pro_italic_600.font.js"></script>
    <script type="text/javascript" src="../js/Myriad_Pro_italic_400.font.js"></script>
    <script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
    
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="../js/html5.js"></script>
    <![endif]-->
  </head>
  <!-- 
    <H1>
        <form action="../reservacion/agregar" method="GET">
            <input type="text" name="Num" >
            <input type="Submit" value="Reservar">
        </form>
    </H1>
   -->

  </head>
  <body>
      <div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="home" id="logo">AirLines</a><span id="slogan">Viajes de Confianza</span>
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="../principal/home"><img src="../images/img1.gif" alt=""></a></li>
							<li><a href="index-4.html"><img src="../images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="../images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="../principal/home">Home</a></li>
							<li><a href="index-1.html">Our Aircraft</a></li>
							<li><a href="safety">Safety</a></li>
							<li><a href="index-3.html">Charters</a></li>
							<li><a href="index-4.html">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>

<!-- / header -->
<article class="col1">
			<div class="pad_1">
				<h2>Your Flight Planner</h2>
				<form id="form_1" action="" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<input type="radio" name="name1">Round Trip<br>
							<input type="radio" name="name1">One Way
						</div>
						<div class="radio">
							<input type="radio" name="name1">Empty-Leg<br>
							<input type="radio" name="name1">Multi-Leg
						</div>
					</div>
					<div class="wrapper">
						Leaving From:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Going To:
						<div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Departure Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Return Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Passenger(s):</p>
						<div class="bg left"><input type="text" class="input input2" value="# passengers" onblur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
						<a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
					</div>
				</form>
				<h2>Recent News</h2>
				<p class="under"><a href="#" class="link1">Nemo enim ipsam voluptatem quia</a><br>November 5, 2010</p>
				<p class="under"><a href="#" class="link1">Voluptas aspernatur autoditaut fjugit</a><br>November 1, 2010</p>
				<p><a href="#" class="link1">Sed quia consequuntur magni</a><br>October 23, 2010</p>
			</div>
		</article>