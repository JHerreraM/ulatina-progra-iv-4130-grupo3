        <section id="content">
		<article class="col1" style="padding-top: 30px;">
			<div class="pad_1" >
                                <div>
                                    <table>
                                        <tr>
                                            <td colspan="2">Proceso Reserva</td>
                                        </tr>
                                        <tr>
                                            <td width="80px"></td><td><b>-> Seleccion Vuelo</b></td>
                                        </tr>
                                       <tr>
                                            <td></td><td>2. Seleccion Asiento</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>3. Autenticacion</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>4. Confirmacion</td>
                                        </tr>
                                    </table>
                                </div>
				<form name="reservacion" id="form_1" action="../reservacion/vueloSalida" method="post">
                                        <div class="wrapper pad_bot1" style="margin-top: 35px">
                                            <b>Detalle reserva</b><br>
                                            <center>(Vacio)</center>
                                        </div>
				</form>	
			</div>
		</article>

		<article class="col2 pad_left1" style="padding-top: 30px;">
			 Vuelos Disponibles
			<div class="wrapper">
                            <form action="asientoSalida" method="post" >
                                <div style="padding-top: 20px; ">
                                   
                                <table class="table_reserva" style="border-color: black; " width="500px">
                                <?php 
                                        if(sizeOf($vuelos) > 0 ){
                                            foreach($vuelos as $vuelo){ ?>
                                        <tr>
                                            <td>
                                            <table style="border-spacing: 10px;border-style: solid;" width="500px">
                                                <tr style="background: lightskyblue;">
                                                    <td>
                                                        NUMERO DE VUELO<br>

                                                    </td>
                                                    <td colspan="2">SALIDA</td>
                                                    <td>LLEGADA</td>
                                                </tr>
                                                <tr style="height: 30px;border-style: solid;border-width: 1px;">
                                                    <td rowspan="3">
                                                        <?php echo "A" . $vuelo["Vuelo"] ?><br>
                                                        <input type="radio" name="idVuelo" value="<?php echo $vuelo["Vuelo"] ?>" />
                                                    </td>
                                                    <td colspan="2"><?php echo $vuelo["Salida"] ?></td>
                                                    <td><?php echo $vuelo["Llegada"] ?></td>
                                                </tr>
                                                <tr style="margin-top: 100px;">
                                                    <td>ORIGEN</td>
                                                    <td>DESTINO</td>
                                                    <td>DURACION</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $vuelo["Origen"] ?></td>
                                                    <td><?php echo $vuelo["Destino"] ?></td>
                                                    <td><?php echo $vuelo["Duracion"] ?> Minutos</td>
                                                </tr>
                                            </table>

                                            </td>
                                        </tr> 
                                    <?php }
                                        
                                        } else {
                                            $this->noResultadosFlag = true;
                                            echo "No se Encontraron Resultados.";
                                        }
                                        
                                        ?>
                                </table>
                                    <div style="float:right;margin-top: 50px;margin-right: 45px; margin-bottom: 100px;">
                                        <?php  
                                            if( !$this->noResultadosFlag ){
                                                echo "<input type=\"submit\" value=\"Siguiente\"/>";
                                            } else {
                                                echo "<a href=\"../principal/home\"/>Volver a Escoger</a>";
                                            }
                                        
                                        ?>
                                        
                                    </div>
                            </form>
                            </div>
                        </div>
		</article>

	</section>



			