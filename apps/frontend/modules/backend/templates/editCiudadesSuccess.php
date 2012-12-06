<?php
    

    $this->sublinks = Array( Array("Principal", "ciudades" ), Array("Listado", "listCiudades" ) );
    $this->menuCurrent = "ciudades";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Ciudades</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaCiudades" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($ciudades as $ciudad){ $vcantReg=1?>
                            <p>
                                <label>Codigo Pais</label>
                                <input type="text" class="input-short" value="<?php echo $ciudad["codigo_pais"] ?>" name="codPaisNuevo" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $ciudad["codigo_pais"] ?>" name="codPaisAnt"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Codigo Ciudad</label>
                                <input type="text" class="input-short" value="<?php echo $ciudad["codigo_ciudad"] ?>" name="codCiudadNuevo" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $ciudad["codigo_ciudad"] ?>" name="codCiudadAnt"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Nombre Ciudad</label>
                                <input type="text" class="input-short" value="<?php echo $ciudad["nombre_ciudad"] ?>"name="nomCiudadNuevo" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                    <label>Codigo Pais</label>
                                    
                                    <select class="input-short" name="codPaisAnt" maxlength="5">
                                        <?php foreach($paises as $pais){?>
                                        <option value="<?php echo $pais["codigo_pais"] ?>"><?php echo $pais["codigo_pais"] ?></option>
                                    
                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Codigo Ciudad</label>
                                    <input type="text" class="input-short" name="codCiudadAnt" maxlength="5"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Nombre Ciudad</label>
                                    <input type="text" class="input-short" name="nomCiudadNuevo" />
                                    <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
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
