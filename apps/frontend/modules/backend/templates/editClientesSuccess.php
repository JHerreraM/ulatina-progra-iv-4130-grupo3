<?php
    

    $this->sublinks = Array( Array("Principal", "clientes" ), Array("Listado", "listClientes" ) );
    $this->menuCurrent = "clientes";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Clientes</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaClientes" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($clientes as $cliente){ $vcantReg=1?>
                            <p>
                                <label>Tipo Identificacion</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["tipo_identificacion"] ?>" disabled="disabled" maxlength="1"/>
                                <input type="hidden"  value="<?php echo $cliente["tipo_identificacion"] ?>" name="tipoIdentif"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Numero Identificacion</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["identificacion"] ?>" disabled="disabled" maxlength="30"/>
                                <input type="hidden"  value="<?php echo $cliente["identificacion"] ?>" name="numIdentif"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Nombre</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["nombre_completo"] ?>" name="nomCompleto" maxlength="150"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Fecha Nacimiento</label>
                                <input type="date" class="input-short" value="<?php echo $cliente["fecha_nacimiento"] ?>" name="fecNacimiento" maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Genero</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["genero"] ?>" name="tipoGenero" maxlength="1"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                  <label>Codigo Pais</label>

                                  <select class="input-short" name="codPais" maxlength="5" >
                                      <?php foreach($paises as $pais){?>
                                      <option <?php if ($pais["codigo_pais"] == $cliente["codigo_pais"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $pais["codigo_pais"] ?>"><?php echo $pais["nacionalidad"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                                  <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                   Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                                
                            <p>
                                <label>E-Mail</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["email"] ?>" name="eMail" maxlength="75"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Principal</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["tel_principal"] ?>" name="telPrincipal" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Secundario</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["tel_secundario"] ?>" name="telSecundario" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Sangre</label>
                                <input type="text" class="input-short" value="<?php echo $cliente["tipo_sangre"] ?>" name="tipoSangre" maxlength="3"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                  <label>Codigo Usuario</label>

                                  <select class="input-short" name="codUsr" maxlength="10" >
                                      <?php foreach($usuarios as $usuario){?>
                                      <option <?php if ($usuario["codigo_usuario"] == $cliente["fk_codigo_usuario"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $usuario["codigo_usuario"] ?>"><?php echo $usuario["codigo_usuario"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                                  <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                   Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            <p>
                                <label>Direccion</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="direcEsp" >
                                <?php echo $cliente["direccion"] ?>
                                </textarea>
                            </p>
                            
                            <p>
                                <label>Detalles</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="DetallesNuevo" >
                                <?php echo $cliente["detalles"] ?>
                                </textarea>
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                    <label>Tipo Identificacion</label>
                                    <input type="text" class="input-short" name="tipoIdentif" maxlength="1" value ="C"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Numero Identificacion</label>
                                    <input type="text" class="input-short" name="numIdentif" maxlength="30"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Nombre</label>
                                    <input type="text" class="input-short" name="nomCompleto" maxlength="150"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Fecha Nacimiento</label>
                                    <input type="date" class="input-short" name="fecNacimiento" maxlength="10"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Genero</label>
                                    <input type="text" class="input-short" name="tipoGenero" maxlength="1"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>Codigo Pais</label>
                                    
                                    <select class="input-short" name="codPais" maxlength="5">
                                        <?php foreach($paises as $pais){?>
                                        <option value="<?php echo $pais["codigo_pais"] ?>"><?php echo $pais["nacionalidad"] ?></option>
                                    
                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>E-Mail</label>
                                    <input type="text" class="input-short" name="eMail" maxlength="75"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Telefono Principal</label>
                                    <input type="text" class="input-short" name="telPrincipal" maxlength="20"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Telefono Secundario</label>
                                    <input type="text" class="input-short" name="telSecundario" maxlength="20"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Tipo Sangre</label>
                                    <input type="text" class="input-short" name="tipoSangre" maxlength="3"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>Codigo Usuario</label>

                                    <select class="input-short" name="codUsr" maxlength="10" >
                                        <?php foreach($usuarios as $usuario){?>
                                        <option value="<?php echo $usuario["codigo_usuario"] ?>"><?php echo $usuario["codigo_usuario"]?></option>

                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                              </p>
                                
                                <p>
                                    <label>Direccion</label>
                                    <textarea rows="7" cols="90" class="input-medium"  name="direcEsp" >
                                    </textarea>
                                </p>
                                
                                <p>
                                    <label>Detalles</label>
                                    <textarea rows="7" cols="90" class="input-medium"  name="DetallesNuevo" >
                                    </textarea>
                                </p>
                            <?php } ?>
                            
                            <!--<a href="listClientes"><input class="submit-green" value="Guardar"></a>
                            <a href="listClientes"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listClientes"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
