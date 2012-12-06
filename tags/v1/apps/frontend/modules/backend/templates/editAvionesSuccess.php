<?php
    

    $this->sublinks = Array( Array("Principal", "aviones" ), Array("Listado", "listAviones" ) );
    $this->menuCurrent = "aviones";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Aviones</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaAviones" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($aviones as $avion){ $vcantReg=1?>
                            <p>
                                <label>Placa</label>
                                <input type="text" class="input-short" value="<?php echo $avion["placa"] ?>" disabled="disabled" maxlength="15"/>
                                <input type="hidden"  value="<?php echo $avion["placa"] ?>" name="avPlaca"  maxlength="15"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Marca</label>
                                <input type="text" class="input-short" value="<?php echo $avion["marca"] ?>" name="avMarca" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Modelo</label>
                                <input type="text" class="input-short" value="<?php echo $avion["modelo"] ?>" name="avModelo" maxlength="4"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Cantidad Pasajeros</label>
                                <input type="text" class="input-short" value="<?php echo $avion["cantidad_pasajeros"] ?>" name="cantPas" maxlength="4"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Estado</label>
                                <select class="input-short" name="avEstado">
                                    <option  <?php if ($avion["estado"] == "E")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="E">En Taller</option>
                                    <option  <?php if ($avion["estado"] == "A")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="A">Activo</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                                
                            <p>
                                <label>Distancia Recorrida</label>
                                <input type="text" class="input-short" value="<?php echo $avion["distancia_recorrida"] ?>" name="distRecorr" maxlength="11"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                                                        
                            <p>
                                <label>Detalles</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="DetallesNuevo" >
                                <?php echo $avion["detalles"] ?>
                                </textarea>
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                    <label>Placa</label>
                                    <input type="text" class="input-short" name="avPlaca" maxlength="15"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Marca</label>
                                    <input type="text" class="input-short" name="avMarca" maxlength="20"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Modelo</label>
                                    <input type="text" class="input-short" name="avModelo" maxlength="4"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Cantidad Pasajeros</label>
                                    <input type="text" class="input-short" name="cantPas" maxlength="4"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Estado</label>
                                    <select class="input-short" name="avEstado">
                                        <option   value="E">En Taller</option>
                                        <option   value="A">Activo</option>
                                    </select>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Distancia Recorrida</label>
                                    <input type="text" class="input-short" name="distRecorr" maxlength="11"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
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
                            <a href="listAviones"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
