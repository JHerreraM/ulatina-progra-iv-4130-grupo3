<?php
    

    $this->sublinks = Array( Array("Principal", "personal" ), Array("Listado", "listPersonal" ) );
    $this->menuCurrent = "personal";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Personal</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaPersonal" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($personal as $person){ $vcantReg=1?>
                            <p>
                                <label>Tipo Identificacion</label>
                                <input type="text" class="input-short" value="<?php echo $person["tipo_identificacion"] ?>" disabled="disabled" maxlength="1"/>
                                <input type="hidden"  value="<?php echo $person["tipo_identificacion"] ?>" name="tipoIdentif"  maxlength="1"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Numero Identificacion</label>
                                <input type="text" class="input-short" value="<?php echo $person["identificacion"] ?>" disabled="disabled" maxlength="30"/>
                                <input type="hidden"  value="<?php echo $person["identificacion"] ?>" name="numIdentif"  />
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Nombre</label>
                                <input type="text" class="input-short" value="<?php echo $person["nombre_completo"] ?>" name="nomCompleto" maxlength="150"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Fecha Nacimiento</label>
                                <input type="date" class="input-short" value="<?php echo $person["fecha_nacimiento"] ?>" name="fecNacimiento" maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Genero</label>
                                <input type="text" class="input-short" value="<?php echo $person["genero"] ?>" name="tipoGenero" maxlength="1"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                  <label>Codigo Pais</label>

                                  <select class="input-short" name="codPais" maxlength="5" >
                                      <?php foreach($paises as $pais){?>
                                      <option <?php if ($pais["codigo_pais"] == $person["codigo_pais"])
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
                                <input type="text" class="input-short" value="<?php echo $person["email"] ?>" name="eMail" maxlength="75"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Principal</label>
                                <input type="text" class="input-short" value="<?php echo $person["tel_principal"] ?>" name="telPrincipal" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Secundario</label>
                                <input type="text" class="input-short" value="<?php echo $person["tel_secundario"] ?>" name="telSecundario" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Sangre</label>
                                <input type="text" class="input-short" value="<?php echo $person["tipo_sangre"] ?>" name="tipoSangre" maxlength="3"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Horas Vuelo</label>
                                <input type="text" class="input-short" value="<?php echo $person["horas_vuelo"] ?>" name="horasVuelo" maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Direccion</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="direcEsp" >
                                <?php echo $person["direccion"] ?>
                                </textarea>
                            </p>
                            
                            <p>
                                <label>Detalles</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="DetallesNuevo" >
                                <?php echo $person["detalles"] ?>
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
                                    <label>Horas Vuelo</label>
                                    <input type="text" class="input-short" name="horasVuelo" maxlength="10"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
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
                            
                            <!--<a href="listPersonal"><input class="submit-green" value="Guardar"></a>
                            <a href="listPersonal"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listPersonal"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
