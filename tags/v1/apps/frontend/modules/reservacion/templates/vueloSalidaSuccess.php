        <section id="content">

		<article class="col1">
			<div class="pad_1">
				<h2>Planificador Vuelo</h2>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<input type="radio" name="sentido" value="roundtrip">Ida y Vuelta<br>
							<input type="radio" name="sentido" value="oneleg">Unico Sentido
						</div>
						<div class="radio">
						</div>
					</div>
					<div class="wrapper">
						Salida:
						<div class="bg"><input type="text" name="salida" class="input input1" value="Digite una Ciudad" onblur="if(this.value=='') this.value='Digite una Ciudad'" onFocus="if(this.value =='Digite una Ciudad' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Destino:
						<div class="bg"><input type="text" name="destino"  class="input input1" value="Digite una Ciudad" onblur="if(this.value=='') this.value='Digite una Ciudad'" onFocus="if(this.value =='Digite una Ciudad' ) this.value=''"></div>
					</div>
					<div class="wrapper">
						Fecha y Hora de Salida:
						<div class="wrapper">
							<div class="bg left"><input id="fechasalida" type="text" name="fechaSalida"  class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input id="tiemposalida"  type="text" name="horaSalida" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Fecha y Hora de Regreso:
						<div class="wrapper">
							<div class="bg left"><input type="text" id="fechallegada" name="fechaLlegada"  class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" id="tiempollegada" name="fechaLlegada"  class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Pasajero(s):</p>
						<div class="bg left"><input type="text" name="numPasajeros" class="input input2" value="# Pasajeros" onblur="if(this.value=='') this.value='# Pasajeros'" onFocus="if(this.value =='# Pasajeros' ) this.value=''"></div>
						<a href="javascript:submitReservacion();" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
					</div>
				</form>
                                <h2>Noticias</h2>
                                <?php foreach($noticias as $noticia){ ?> 
                                    <p class="under"><a href="#" class="link1"><?php echo $noticia["titulo"] ?></a><br>
                                     <?php 
                                            $oDate = new DateTime($noticia["fecha"]);
                                            $sDate = $oDate->format("F j, Y");
                                            echo $sDate;
                                     ?>
                                    </p>
                                <?php } ?>
				
			</div>
		</article>

		<article class="col2 pad_left1">
			 <h2>Resultados Vuelo</h2>
			<div class="wrapper">
                                <div style="padding-top: 20px; ">
                                   
                                <table class="table_reserva" style="border-color: black; " width="500px">
                                <?php foreach($vuelos as $vuelo){ ?>
                                    <tr>
                                        <td>
                                        <table style="border-spacing: 10px;" width="500px">
                                            <tr>
                                                <td rowspan="4">
                                                    vuelo<br>
                                                    <?php echo "A" . $vuelo["Vuelo"] ?><br>
                                                    <input type="radio" />
                                                </td>
                                                <td colspan="2">Salida</td>
                                                <td>Llegada</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $vuelo["Salida"] ?></td>
                                                <td><?php echo $vuelo["Llegada"] ?></td>
                                            </tr>
                                            <tr style="margin-top: 100px;">
                                                <td>origen</td>
                                                <td>destino</td>
                                                <td>duracion</td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $vuelo["Origen"] ?></td>
                                                <td><?php echo $vuelo["Destino"] ?></td>
                                                <td><?php echo $vuelo["Duracion"] ?></td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr> 
                                    <?php } ?>
                                </table>
                                </div>
                            
                            </div>
		</article>

	</section>



			