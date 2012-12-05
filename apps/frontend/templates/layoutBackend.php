<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aerolinea Backend</title>
                
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
                
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
					&nbsp;
                    </div>
                    <div class="grid_4">
                        <a href="" id="logout">
                        Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li <?php if($this->menuCurrent == "principal"){ echo 'id="current"';} ?> ><a href="index">Principal</a></li>
                                <li <?php if($this->menuCurrent == "personal"){ echo 'id="current"';} ?>><a href="personal">Personal</a></li>
                                <li <?php if($this->menuCurrent == "clientes"){ echo 'id="current"';} ?>><a href="clientes">Clientes</a></li>
                                <li <?php if($this->menuCurrent == "paises"){ echo 'id="current"';} ?>><a href="paises">Paises</a></li>
                                <li <?php if($this->menuCurrent == "ciudades"){ echo 'id="current"';} ?>><a href="ciudades">Ciudades</a></li>
                                <li <?php if($this->menuCurrent == "aeropuertos"){ echo 'id="current"';} ?>><a href="aeropuertos">Aeropuertos</a></li>
                                <li <?php if($this->menuCurrent == "aviones"){ echo 'id="current"';} ?>><a href="aviones">Aviones</a></li>
                                <li <?php if($this->menuCurrent == "vuelos"){ echo 'id="current"';} ?>><a href="vuelos">Vuelos</a></li>
                                <li <?php if($this->menuCurrent == "configuracion"){ echo 'id="current"';} ?>><a href="">Configuracion</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <?php
                            foreach($this->sublinks as $link){
                                echo "<li><a href=\"$link[1]\">$link[0]</a></li>";
                            }
                            ?>
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">
                    
            <!-- Dashboard icons -->
            <div class="grid_7">
                <!--
            	<a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_write.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
                	<span>New article</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_file.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_file.gif" width="64" height="64" alt="edit" />
                	<span>Upload file</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_files.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
                	<span>Articles</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_calendar.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_calendar.gif" width="64" height="64" alt="edit" />
                	<span>Calendar</span>
                </a>
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_user.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_user.gif" width="64" height="64" alt="edit" />
                	<span>My profile</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_stats.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_stats.gif" width="64" height="64" alt="edit" />
                	<span>Stats</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="../images/Crystal_Clear_settings.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_settings.gif" width="64" height="64" alt="edit" />
                	<span>Settings</span>
                </a>
                <div style="clear: both"></div>
                -->

                </div> <!-- End .grid_7 -->

            
<?php echo $sf_content ?>  
  
        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2012. <a href="e" title="">Website diseñado por Grupo 3 Programación 4 ULatina</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>		
           
