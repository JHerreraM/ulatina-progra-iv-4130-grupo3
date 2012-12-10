<?php
    

    $this->sublinks = Array( Array("Principal", "aviones" ), Array("Listado", "listAviones" ) );
    $this->menuCurrent = "aviones";
?>  
<!-- Form elements -->                
                <div class="module">
                    <?php if (isset($mensajeCorr)){  ?>      
                    <div>
                        <span class="notification n-success"><?php echo $mensajeCorr?></span>
                    </div>
                    <?php } ?> 
                    
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
                
                <div class="module">
                    
                   <h2><span>Campos del Avion</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:20%">Codigo</th>
                                    <th style="width:21%">Tipo Campo</th>
                                    <th style="width:13%">Fila</th>
                                    <th style="width:13%">Columna</th>
                                    <th style="width:5%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $cont = 0;
                                ?> 
                                <?php foreach($campos as $campo){ $cont = $cont + 1;?>      
                                <tr>
                                    <td class="align-center"><?php echo $cont ?></td>
                                    <td><?php echo $campo["codigo_campo"] ?></td>
                                    <td><?php echo $campo["tipo_campo"] ?></td>
                                    <td><?php echo $campo["fila"] ?></td>
                                    <td><?php echo $campo["columna"] ?></td>
                                    <td>
                                    	<input type="checkbox" name="perBorrar[]" value ="<?php echo $avion["placa"] ?>"/>
                                        <a href="editAviones?avionEdit=<?php echo $avion["placa"] ?>&caCampo=<?php echo $campo["codigo_campo"] ?>&accCampos=4"><img src="../images/minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published"></a>
                                        <a href="editCampos?avionEdit=<?php echo $avion["placa"] ?>&campoEdit=<?php echo $campo["codigo_campo"] ?> "><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        
                        </table>
                            <a href="editCampos?avionEdit=<?php echo $avion["placa"] ?>"><input class="submit-green" type="button" value="Agregar"></a></br></br>
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
                </div> <!-- End .module -->
        <div style="clear:both;"></div>
