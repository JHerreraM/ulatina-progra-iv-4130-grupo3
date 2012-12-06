        <section id="content">

		<article class="col1">
			<div class="pad_1">
				<h2>Planificador Vuelo</h2>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
                                        <div class="wrapper pad_bot1">
                                            Detalle reserva
                                        </div>
				</form>	
			</div>
		</article>

		<article class="col2 pad_left1">
			 <h2>Resultados Vuelo</h2>
			<div class="wrapper">
                            <form action="asientoSalida" method="post" >
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
                                                    <input type="radio" name="idVuelo" value="<?php echo $vuelo["Vuelo"] ?>" />
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
                                    <div style="float:right">
                                        
                                        <input type="submit" value="Siguiente"/>
                                    </div>
                            </form>
                            </div>
                        </div>
		</article>

	</section>



			