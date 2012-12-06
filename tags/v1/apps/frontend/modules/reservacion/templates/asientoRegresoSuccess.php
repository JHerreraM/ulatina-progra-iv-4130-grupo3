        <section id="content">

		<article class="col1">
			<div class="pad_1">
				<h2>Planificador Vuelo</h2>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
					<div class="wrapper pad_bot1">
                                            Numero de Vuelo <br>
                                            <?php echo  "A" . $_SESSION["codVueloSalida"] ; 
                                                  echo  " " . $_SESSION["ciudadSalida"] . " -> " . $_SESSION["ciudadLlegada"];
                                            ?>
                                       </div>
				</form>	
			</div>
		</article>

		<article class="col2 pad_left1">
			<h2>Resultados Vuelo</h2>
			<div class="wrapper" style="padding-top: 20px;">
                            <form action="confirmacion" method="POST">
                            <?php
                                foreach($asientos as $asiento){
                                    $codAsiento = $asiento["codigo_campo"];
                                    echo "<input type='radio' name='asiento' value='$codAsiento'>$codAsiento<br>";
                                }
                            ?>
                            <div style="float:right">

                                <input type="submit" value="Siguiente"/>
                            </div>
                        </div>
		</article>

	</section>


