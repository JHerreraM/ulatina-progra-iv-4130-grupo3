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
                                            <td></td><td>3. Autenticacion</td>
                                        </tr>
                                        <tr>
                                            <td></td><td><b>-> Confirmacion</b></td>
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
                                            <br/>
                                            <b>Asiento:</b>
                                                <?php 
                                                  echo $_SESSION["asientoSalida"] ; 
                                                ?>
                                            <br/>
                                            <b>Nombre:</b>
                                                <?php 
                                                  echo $_SESSION["nombreCliente"] ; 
                                                ?>
                                </div>

			</div>
		</article>

		<article class="col2 pad_left1" style="padding-top: 30px;">
			<h2>Confirmacion</h2>
			<div class="wrapper" style="padding-top: 20px;">
                                Vuelo Reservado con Exito
                        </div>
		</article>

	</section>
