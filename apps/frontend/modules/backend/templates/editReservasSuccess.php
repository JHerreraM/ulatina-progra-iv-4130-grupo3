<?php
    

    $this->sublinks = Array( Array("Principal", "vuelos" ), Array("Listado", "listVuelos" ) );
    $this->menuCurrent = "vuelos";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Reserva</span></h2>
                     <?$vcantReg=0?>   
                     <div class="module-body">
                        <form action="listReservas" method="POST">
                            
                        <?php foreach($reservas as $reserva){ $vcantReg=1?>
                            <p>
                                <label>Codigo Vuelo</label>
                                <input type="text" class="input-short" value="<?php echo $reserva["codigo_vuelo"] ?>" name="codVuelo" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $reserva["codigo_vuelo"] ?>" name="codVuelo"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Codigo Asiento</label>
                                
                                <select class="input-short" name="codAsiento"  disabled="disabled">
                                      <?php foreach($asientos as $asiento){?>
                                      <option <?php if ($asiento["codigo_campo"] == $reserva["codigo_asiento"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                                      value="<?php echo $asiento["codigo_campo"] ?>"><?php echo $asiento["codigo_campo"]." Precio: $".$asiento["costo"]?></option>
                                                      
                                      
                                      <?php } ?>
                                  </select>
                            </p>
                            <input type="hidden"  value="<?php echo $reserva["codigo_asiento"] ?>" name="codAsiento"  maxlength="5"/>
                            
                            <p>
                                <label>Cliente</label>
                                
                                <select class="input-short" name="idenClte" maxlength="30">
                                    <?php foreach($clientelist as $per){?>
                                    <option <?php if ($per["identificacion"] == $reserva["identificacion_cliente"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                        value="<?php echo $per["identificacion"] ?>"><?php echo $per["identificacion"]." - ".$per["nombre_completo"] ?></option>

                                    <?php } ?>
                                </select>
                                <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                 Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Estado Tiquete</label>
                                <select class="input-short" name="reFormaP">
                                    <option  <?php if ($reserva["forma_pago"] == "E")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="E">Efectivo</option>
                                    <option  <?php if ($reserva["forma_pago"] == "L")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="L">Electronicamente</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Estado Tiquete</label>
                                <select class="input-short" name="reserEstado">
                                    <option  <?php if ($reserva["estado_tiquete"] == "V")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="V">Vigente</option>
                                    <option  <?php if ($reserva["estado_tiquete"] == "A")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="A">Anulado</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <?php } ?>
                            
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                { //echo $vcantReg."OOOOOPPPP";
                            ?>
                                <p>
                                    <label>Codigo Vuelo</label>
                                    <input type="text" class="input-short" value="<?php echo $varCodVuel ?>" name="codVuelo" disabled="disabled" maxlength="5"/>
                                    <input type="hidden"  value="<?php echo $varCodVuel ?>" name="codVuelo"  maxlength="5"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Codigo Asiento</label>

                                    <select class="input-short" name="codAsiento"  >
                                          <?php foreach($asientosDisp as $asiento){?>
                                          <option value="<?php echo $asiento["codigo_campo"] ?>"><?php echo $asiento["codigo_campo"]." Precio: $".$asiento["costo"]?></option>
                                          <?php } ?>
                                      </select>
                                </p>

                                <p>
                                    <label>Cliente</label>

                                    <select class="input-short" name="idenClte" maxlength="30">
                                        <?php foreach($clientelist as $per){?>
                                        <option 
                                            value="<?php echo $per["identificacion"] ?>"><?php echo $per["identificacion"]." - ".$per["nombre_completo"] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                               
                                <p>
                                    <label>Forma Pago</label>
                                    <select class="input-short" name="reFormaP">
                                        <option  value="E">Efectivo</option>
                                        <option  value="L">Electronicamente</option>
                                    </select>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>Estado Tiquete</label>
                                    <select class="input-short" name="reserEstado">
                                        <option  value="V">Vigente</option>
                                        <option  value="A">Anulado</option>
                                    </select>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                            <?php } ?>
                            
                            <!--<a href="listCiudades"><input class="submit-green" value="Guardar"></a>
                            <a href="listCiudades"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listReservas?codVuelo=<?php echo $varCodVuel?>"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
