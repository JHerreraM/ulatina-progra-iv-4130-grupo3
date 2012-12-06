<?php
    

    $this->sublinks = Array( Array("Principal", "vuelos" ), Array("Listado", "listVuelos" ) );
    $this->menuCurrent = "vuelos";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Vuelos</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaVuelos" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($vuelos as $vuelo){ $vcantReg=1?>
                            <p>
                                <label>Codigo Vuelo</label>
                                <input type="text" class="input-short" value="<?php echo $vuelo["codigo_vuelo"] ?>" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $vuelo["codigo_vuelo"] ?>" name="codVuelo"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Aeropuerto Origen</label>
                                
                                <select class="input-short" name="aeroOrig"  >
                                      <?php foreach($aeropuertos as $aero){?>
                                      <option <?php if ($vuelo["codigo_aeropuerto_origen"] == $aero["codigo_aeropuerto"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $aero["codigo_aeropuerto"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                            </p>
                            
                            <p>
                                <label>Aeropuerto Destino</label>
                                
                                <select class="input-short" name="aeroDest" >
                                      <?php foreach($aeropuertos as $aero){?>
                                      <option <?php if ($vuelo["codigo_aeropuerto_destino"] == $aero["codigo_aeropuerto"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $aero["codigo_aeropuerto"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                            </p>
                            
                            <p>
                                <label>Avion Asignado</label>
                                
                                <select class="input-short" name="placaAvion" maxlength="5" >
                                      <?php foreach($aviones as $avion){?>
                                      <option <?php if ($vuelo["placa_avion"] == $avion["placa"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $avion["placa"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                            </p>
                            
                            <p>
                                <label>Hora Salida</label>
                                <input type="datetime" class="input-short" value="<?php echo $vuelo["hora_salida"] ?>" name="horSalida" />
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Hora LLegada</label>
                                <input type="datetime" class="input-short" value="<?php echo $vuelo["hora_llegada"] ?>" name="horLLegada" />
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Duracion Estimada</label>
                                <input type="text" class="input-short" value="<?php echo $vuelo["duracion_estimada"] ?>" name="durEstimada" />
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                    <label>Codigo Vuelo</label>
                                    <input type="text" class="input-short" disabled="disabled" maxlength="5" name="codVuelo"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Aeropuerto Origen</label>

                                    <select class="input-short" name="aeroOrig"  >
                                          <?php foreach($aeropuertos as $aero){?>
                                          <option value="<?php echo $aero["codigo_aeropuerto"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>

                                          <?php } ?>
                                      </select>
                                </p>

                                <p>
                                    <label>Aeropuerto Destino</label>

                                    <select class="input-short" name="aeroDest" >
                                          <?php foreach($aeropuertos as $aero){?>
                                          <option value="<?php echo $aero["codigo_aeropuerto"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>
                                          <?php } ?>
                                      </select>
                                </p>

                                <p>
                                    <label>Avion Asignado</label>

                                    <select class="input-short" name="placaAvion" maxlength="5" >
                                          <?php foreach($aviones as $avion){?>
                                          <option value="<?php echo $avion["placa"] ?>"><?php echo $aero["codigo_aeropuerto"]?></option>

                                          <?php } ?>
                                      </select>
                                </p>

                                <p>
                                    <label>Hora Salida</label>
                                    <input type="datetime" class="input-short" name="horSalida" />
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Hora LLegada</label>
                                    <input type="datetime" class="input-short" name="horLLegada" />
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Duracion Estimada</label>
                                    <input type="text" class="input-short" name="durEstimada" />
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                            <?php } ?>
                            
                            <!--<a href="listClientes"><input class="submit-green" value="Guardar"></a>
                            <a href="listClientes"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listVuelos"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
