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
                            <form action="login" method="POST">
                                <div style="margin-top: 100px; margin-bottom: 200px; background: lightgrey; width: 300px; height: 100px;">
                                <?php if(!$reserveFlag){ ?>
                                    
                                <h2>Login</h2>
                                <table>
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
                                <?php } else { ?>
                                    
                                    Reservacion Realizada con Exito
                                    
                                <?php } ?>
                                
                                </div>
                                
                            </form>
                            
                        </div>

		</article>

	</section>



