        <section id="content">

		
		<article class="col2 pad_left1" style="padding-top: 30px;">
			 Autenticacion
			<div class="wrapper">
                            <center>
                            <form action="auth" method="POST">
                               <?php 
                                    if( isset( $_SESSION["errorMessage"] )){
                                        echo "<b style=\"color:red\">" .  $_SESSION["errorMessage"] . "</b>";
                                    }
                                ?>
                                <div style="margin-top: 100px; margin-bottom: 200px; background: lightgrey; width: 300px; height: 100px; padding-top: 30px; padding-left: 30px">

                                    <table style="">
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
                                
                                
                                </div>
                                <input type="hidden" name="login" value="true">
                            </form>
                            </center>  
                        </div>

		</article>

	</section>


