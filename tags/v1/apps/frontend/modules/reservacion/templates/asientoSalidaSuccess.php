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
                                            <td></td><td><b>-> Seleccion Asiento</b></td>
                                        </tr>
                                        <tr>
                                            <td></td><td>3. Autenticacion</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>4. Confirmacion</td>
                                        </tr>
                                    </table>
                                </div>

					<div class="wrapper pad_bot1" style="margin-top: 35px">
                                            Detalle Reserva <br/><br/>
                                            <b>Vuelo:</b> <?php echo  "A" . $_SESSION["codVueloSalida"] ; 
                                                  echo  " " . $_SESSION["ciudadSalida"] . " -> " . $_SESSION["ciudadLlegada"];
                                            ?>
                                       </div>
	
			</div>
		</article>

		<article class="col2 pad_left1" style="padding-top: 30px;">
			Asientos Disponibles
			<div class="wrapper" style="padding-top: 20px;">
                            <form action="auth" method="POST">
                            <?php
                                foreach($asientos as $asiento){
                                    $codAsiento = $asiento["codigo_campo"];
                                    $costo =  $asiento["costo"];
                                    echo "<input type='radio' name='asiento' value='$codAsiento'>$codAsiento (USD <b>$costo$</b>) <br>";
                                }
                            ?>
                            <div style="float:right;margin-top: 50px;margin-right: 45px; margin-bottom: 100px;">

                                <input type="submit" value="Siguiente"/>
                            </div>
                        </div>
		</article>

	</section>


