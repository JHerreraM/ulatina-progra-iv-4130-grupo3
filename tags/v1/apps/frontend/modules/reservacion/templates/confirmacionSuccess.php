        <section id="content">

		<article class="col1">
			<div class="pad_1">
				<h2>Planificador Vuelo</h2>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
					<div class="wrapper pad_bot1">

                                       </div>
				</form>	
			</div>
		</article>

		<article class="col2 pad_left1">
			<h2>Confirmacion</h2>
			<div class="wrapper" style="padding-top: 20px;">
                            <form action="login" method="POST">
                            <?php
                                echo "<p>Vuelo Salida: $vueloSalida, Asiento $asientoSalida</p>";
                                //echo "<p>Vuelo Regreso: $vueloRegreso, Asiento $asientoRegreso</p>";
                            ?>
                                <input type="hidden" name="confirmacion" value="confirmed">
                                <input type="submit" value="Confirmar">
                            </form>    
                        </div>
		</article>

	</section>
