        <section id="content">

		<article class="col1" style="padding-top: 30px;">
			<div class="pad_1">
                                <div>
                                    <table>
                                        <tr>
                                            <td colspan="2">Proceso Reserva</td>
                                        </tr>
                                        <tr>
                                            <td width="80px"></td><td>1. Seleccion Vuelo</td>
                                        </tr>
                                       <tr>
                                            <td></td><td>2. Seleccion Asiento</td>
                                        </tr>
                                        <tr>
                                            <td></td><td><b>-> Autenticacion</b></td>
                                        </tr>
                                        <tr>
                                            <td></td><td>4. Confirmacion</td>
                                        </tr>
                                    </table>
                                </div>
                            	<div class="wrapper pad_bot1" style="margin-top: 35px">
                                            Detalle Reserva <br/><br/>
                                            <b>Vuelo:</b> 
                                                <?php 
                                                  echo  "A" . $_SESSION["codVueloSalida"] ; 
                                                  echo  " " . $_SESSION["ciudadSalida"] . " -> " . $_SESSION["ciudadLlegada"];
                                                ?>
                                            <br>
                                            <b>Asiento:</b>
                                                <?php 
                                                  echo $_SESSION["asientoSalida"] ; 
                                                ?>
                                            <br>
                                          <b>Total:</b>
                                                <?php 
                                                  echo $_SESSION["costo"] . " $"; 
                                                ?>
                                            
                                </div>
	
			</div>
		</article>

		<article class="col2 pad_left1" style="padding-top: 30px;">
			 Autenticacion
			<div class="wrapper">
                            <center>
                            <form action="login" method="POST">
                               <?php 
                                    if( isset( $_SESSION["errorMessage"] )){
                                        echo "<b style=\"color:red\">" .  $_SESSION["errorMessage"] . "</b>";
                                    }
                                ?>
                                <div style="margin-top: 100px; margin-bottom: 200px; background: lightgrey; width: 300px; height: 100px; padding-top: 30px; padding-left: 30px">

                                    <table style="">
                                        <tr>
                                            <td width="100px;" valign="center">
                                            Usuario 
                                            </td>
                                            <td valign="left">
                                            <input type="text" name="username" style="width:150px"/>
                                            </td>    
                                        </tr>
                                        <tr>
                                            <td width="100px;" valign="center">
                                            Password 
                                            </td>
                                            <td valign="left">
                                            <input type="password"  name="password" style="width:150px"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input type="Submit" value="Ingresar">
                                            </td>
                                        </tr>
                                    </table>
                                
                                
                                </div>
                                
                            </form>
                            </center>  
                        </div>

		</article>

	</section>



