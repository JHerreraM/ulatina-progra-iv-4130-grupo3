<?php
    

    $this->sublinks = Array( Array("Principal", "vuelos" ), Array("Listado", "listVuelos" ) );
    $this->menuCurrent = "vuelos";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Vuelos</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaPersonalXVuelo" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($personal as $person){ $vcantReg=1?>
                            <p>
                                <label>Personal</label>
                                
                                <input type="hidden"  value="<?php echo $varCodVuelPer ?>" name="codVuelo"  maxlength="5"/>
                                <input type="hidden"  value="<?php echo $vartipId ?>" name="tipoId"  maxlength="5"/>
                                
                                <select class="input-short" name="idPersonal" maxlength="5">
                                    <?php foreach($personallist as $per){?>
                                    <option <?php if ($per["numero_identificacion"] == $person["identificacion_personal"])
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>
                                        value="<?php echo $per["numero_identificacion"] ?>"><?php echo $pais["numero_identificacion"]." - ".$pais["nombre_completo"] ?></option>

                                    <?php } ?>
                                </select>
                                <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                 Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                            <input type="hidden"  value="<?php echo $varCodVuelPer?>" name="codVuelo"  maxlength="5"/>
                            <input type="hidden"  value="<?php echo $vartipId?>" name="tipoId"  maxlength="5"/>
                                    
                            <p>
                                <label>Personal</label>

                                <select class="input-short" name="idPersonal" maxlength="5">
                                    <?php foreach($personallist as $per){?>
                                    <option value="<?php echo $per["identificacion"] ?>"><?php echo $per["identificacion"]." - ".$per["nombre_completo"] ?></option>

                                    <?php } ?>
                                </select>
                                <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                 Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            <?php } ?>
                            
                            <!--<a href="listCiudades"><input class="submit-green" value="Guardar"></a>
                            <a href="listCiudades"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listCiudades"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
