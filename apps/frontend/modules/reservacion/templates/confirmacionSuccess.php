        <section id="content">

		<article class="col1" style="padding-top: 30px;">
			<div class="pad_1">
				<div>
                                    <table>
                                        <tr>
                                            <td colspan="2">Proceso Reserva</td>
                                        </tr>
                                        <tr>
                                            <td width="80px"></td><td>->Seleccion Vuelo</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>->Seleccion Asiento</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>-><b>Confirmacion</b></td>
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
                                          <b>Nombre:</b>
                                                <?php 
                                                  echo $_SESSION["nombreCliente"] ;
                                           
                                                ?>
                                          <br>
                                          <b>Total:</b>
                                                <?php 
                                                  echo $_SESSION["costo"] . " $" ; 
                                         ?>
                                </div>

			</div>
		</article>

		<article class="col2 pad_left1" style="padding-top: 30px;">
			<h2>Confirmacion</h2>
			<div class="wrapper" style="padding-top: 20px;">

                            <?php
                                echo "<p><b>Vuelo Salida</b>: A$vueloSalida</p>";
                                echo "<p><b>Ciudad Partida:</b> " . $_SESSION["ciudadSalida"] . "</p>";
                                echo "<p><b>Ciudad Partida:</b> " . $_SESSION["ciudadLlegada"] . "</p>";
                                echo "<p><b>Asiento:</b>" . $_SESSION["asientoSalida"] . "</b></p>";
                                //echo "<p>Vuelo Regreso: $vueloRegreso, Asiento $asientoRegreso</p>";
                            ?>

                            <div style="float:right;margin-top: 50px;margin-right: 45px; margin-bottom: 100px;">
                                <!-- <input type="submit" value="Confirmar"> -->

                                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="business" value="TYGYXPVA7YDQ6">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="item_name" value="Reservacion Vuelo">
                                <input type="hidden" name="amount" value="<?php echo $costo; ?>">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="button_subtype" value="services">
                                <input type="hidden" name="return" value="http://localhost:8081/aerolinea4/v1/web/reservacion/reservar">
                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>

                                
                            </div>
 
                        </div>
		</article>

	</section>
