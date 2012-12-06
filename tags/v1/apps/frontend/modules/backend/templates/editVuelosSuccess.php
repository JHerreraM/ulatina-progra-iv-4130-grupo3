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
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listVuelos"><input class="submit-gray" type="button" value="Cancelar"></a>
                            </br></br>
                            
                            <!--<a href="listClientes"><input class="submit-green" value="Guardar"></a>
                            <a href="listClientes"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                             <div class="module">
                                <h2><span>Personal Asignado</span></h2>

                                    <div class="module-table-body">
                                        <form action="">
                                        <table id="myTable" class="tablesorter">
                                                <thead>
                                                <tr>
                                                    <th style="width:5%">#</th>
                                                    <th style="width:13%">Identificacion</th>
                                                    <th style="width:13%">Nombre</th>
                                                    <th style="width:13%">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($personal as $per){  ?>      
                                                <tr>
                                                    <td class="align-center">1</td>
                                                    <td><?php echo $per["identificacion"] ?></td>
                                                    <td><?php echo $per["nombre_completo"] ?></td>
                                                    
                                                <td>
                                                        <input type="checkbox" />
                                                        <a href=""><img src="../images/tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                                        <a href="editPersonalXVuelo?codVuelo=<?php echo $varCodVuel ?>&tipIdEdit=<?php echo $per["tipo_identificacion"] ?>&numIdEdit=<?php echo $per["identificacion"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                                        <a href=""><img src="../images/balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                                        <a href=""><img src="../images/bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                                    </td>
                                                </tr>
                                              <?php } ?>      

                                            </tbody>
                                        </table>
                                            
                                        <a href="editPersonalXVuelo?codVuelo=<?php echo $varCodVuel ?>"><input class="submit-green" type="button" value="Agregar"></a></br></br>
                                        </form>
                                        <div class="pager" id="pager">
                                            <form action="">
                                                <div>
                                                <img class="first" src="../images/arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                                <img class="prev" src="../images/arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                                <input type="text" class="pagedisplay input-short align-center"/>
                                                <img class="next" src="../images/arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                                <img class="last" src="../images/arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                                <select class="pagesize input-short align-center">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="table-apply">
                                            <form action="">
                                            <div>
                                            <span>Apply action to selected:</span> 
                                            <select class="input-medium">
                                                <option value="1" selected="selected">Select action</option>
                                                <option value="2">Publish</option>
                                                <option value="3">Unpublish</option>
                                                <option value="4">Delete</option>
                                            </select>
                                            </div>
                                            </form>
                                        </div>
                                        <div style="clear: both"></div>
                                     </div> <!-- End .module-table-body -->
                                </div> 
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
