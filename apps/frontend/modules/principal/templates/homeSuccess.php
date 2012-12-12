<script>
    function submitReservacion(){
        document.reservacion.submit();
    }
    $(document).ready( function () {
        $(function() {
            $( "#fechasalida" ).datepicker();
        });
        $(function() {
            $( "#fechallegada" ).datepicker();
        });
        $('#tiemposalida').timepicker({
            hourGrid: 4,
            minuteGrid: 10,
            timeFormat: 'hh:mm tt'
        });
        $('#tiempollegada').timepicker({
            hourGrid: 4,
            minuteGrid: 10,
            timeFormat: 'hh:mm tt'
        });
    } );
</script>

        <section id="content">

		<article class="col1">
			<div class="pad_1">
				<h2>Planificador Vuelo</h2>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
					<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
							<input type="radio" name="sentido" value="roundtrip" disabled>Ida y Vuelta<br>
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
							<div class="bg right"><input type="text" id="tiempollegada" name="horaLlegada"  class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
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
			<h2>Bienvenido a Aero Destinos!</h2>
			
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Aeronaves</strong></p>
					<p class="pad_bot2">Contamos con las mejores aeronaves de diferentes capacidades para el Transporte Aéreo de Pasajeros. Contamos con servicios especiales. Contáctanos, no encontrarás en Costa Rica una empresa que te pueda brindar lo que nosotros podemos ofrecerte.</p>
				</div>
			</div>
                        <div class="wrapper pad_bot2"></div>
			<div class="marker">
				<div class="wrapper">
					<p class="pad_bot2"><strong>Charters</strong></p>
					<p class="pad_bot2">Aero Destinos es uno de los proveedores de vuelos privados tipo chárter más grande de Costa Rica y ofreciendo a sus clientes la mejor calidad en aviones, confianza y servicio por 5 años.</p>
				</div>
			</div>
			<div class="wrapper pad_bot2">
				<a href="#" class="button1">Reservacion</a>
				<a href="charters" class="button2">Flota</a>
			</div>
			<div class="wrapper">
				<article class="cols">
					<h2>Nuestros Clientes</h2>
					<p>La calidad de nuestro servicio se basa en la profunda especialización. Nuestros clientes confían en la habilidad y experiencia de nuestros profesionales.</p>
					<p>Nuestro único objetivo es velar por la satisfacción del cliente.</p>
				</article>
				<div class="box1" style="margin-bottom: 100px;">
					<div class="pad_1">
						<div class="wrapper">
							<p class="pad_bot2">Recomiendo seriamente al equipo de Aero Destinos. Muy profesionales, con una gran idoneidad y un excelente trato a nivel personal, no existe ni una sola queja acerca del servicio.</p>
							<p><span class="right">Mr. Thomas Lloyd</span>&nbsp;<br></p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>

