<?php
    

    $this->sublinks = Array( Array("Principal", "campos" ), Array("Listado", "listCampos" ) );
    $this->menuCurrent = "campos";
?> 

             <div class="module">
                     <h2><span>Campos de Avion</span></h2>
                        
                     <div class="module-body">
                        <form action="editAviones" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($campos as $campo){ $vcantReg=1?>
                            <p>
                                <label>Placa</label>
                                <input type="text" class="input-short" value="<?php echo $campo["placa_avion"] ?>" disabled="disabled" maxlength="15"/>
                                <input type="hidden"  value="<?php echo $campo["placa_avion"] ?>" name="avionEdit"  maxlength="15"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Campo</label>
                                <input type="text" class="input-short" value="<?php echo $campo["codigo_campo"] ?>" disabled="disabled" maxlength="15"/>
                                <input type="hidden"  value="<?php echo $campo["codigo_campo"] ?>" name="caCampo"  maxlength="15"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Fila</label>
                                <input type="text" class="input-short" value="<?php echo $campo["fila"] ?>" name="caFila" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Columna</label>
                                <input type="text" class="input-short" value="<?php echo $campo["columna"] ?>" name="caColumna" maxlength="4"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Campo</label>
                                <select class="input-short" name="caTipoCam">
                                    <option  <?php if ($campo["tipo_campo"] == "A")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="A">Asiento Turista</option>
                                    <option  <?php if ($campo["tipo_campo"] == "E")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="E">Asiento Ejecutivo</option>
                                    <option  <?php if ($campo["tipo_campo"] == "P")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="P">Pasillo</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantRegCa"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                <label>Placa</label>
                                <input type="text" class="input-short" value="<?php echo $caPlacaAvion?>" disabled="disabled" maxlength="15"/>
                                <input type="hidden"  value="<?php echo $caPlacaAvion ?>" name="avionEdit"  maxlength="15"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Campo</label>
                                <input type="text" class="input-short" name="caCampo" maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Fila</label>
                                <input type="text" class="input-short" name="caFila" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Columna</label>
                                <input type="text" class="input-short" name="caColumna" maxlength="4"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Campo</label>
                                <select class="input-short" name="caTipoCam">
                                    <option  value="A">Asiento</option>
                                    <option  value="P">Pasillo</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            <?php } ?>
                            
                            <!--<a href="listClientes"><input class="submit-green" value="Guardar"></a>
                            <a href="listClientes"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="editAviones?avionEdit=<?php echo $caPlacaAvion ?>"><input class="submit-gray" type="button" value="Cancelar"></a>
                            <input type="hidden" value="1" name="accCampos"/>
                        </form>
                     </div> <!-- End .module-body -->
                     
                </div>  <!-- End .module -->
                