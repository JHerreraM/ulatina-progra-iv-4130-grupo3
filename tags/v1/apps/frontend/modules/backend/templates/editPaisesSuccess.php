<?php
    

    $this->sublinks = Array( Array("Principal", "paises" ), Array("Listado", "listPaises" ) );
    $this->menuCurrent = "paises";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Paises</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaPaises" method="POST">
                        <?$vcantPais=0?>    
                        <?php foreach($paises as $pais){ $vcantPais=1?>
                            <p>
                                <label>Codigo Pais</label>
                                <input type="text" class="input-short" value="<?php echo $pais["codigo_pais"] ?>" name="codPaisNuevo" disabled="disabled" maxlength="5"/>
                                <input type="hidden" class="input-short" value="<?php echo $pais["codigo_pais"] ?>" name="codPaisAnterior"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Nombre Pais</label>
                                <input type="text" class="input-short" value="<?php echo $pais["nombre_pais"] ?>"name="nomPaisNuevo" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Nacionalidad</label>
                                <input type="text" class="input-short" value="<?php echo $pais["nacionalidad"] ?>"name="nacPais"/>
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantPais?>"name="cantPais"/>
                            <?php 
                                if ($vcantPais==0) 
                                {
                            ?>
                                <p>
                                    <label>Codigo Pais</label>
                                    <input type="text" class="input-short" name="codPaisNuevo"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Nombre Pais</label>
                                    <input type="text" class="input-short" name="nomPaisNuevo" />
                                    <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Nacionalidad</label>
                                    <input type="text" class="input-short" name="nacPais"/>
                                    <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                            <?php } ?>
                            
                            <!--<a href="listPaises"><input class="submit-green" value="Guardar"></a>
                            <a href="listPaises"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listPaises"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
