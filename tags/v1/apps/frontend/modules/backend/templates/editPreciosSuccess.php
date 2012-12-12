<?php
    

    $this->sublinks = Array( Array("Principal", "precios" ), Array("Listado", "listPrecios" ) );
    $this->menuCurrent = "precios";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Precios</span></h2>
                        
                     <div class="module-body">
                        <form action="listPrecios" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($precios as $precio){ $vcantReg=1?>
                            <p>
                                <label>Codigo Vuelo</label>
                                <input type="text" class="input-short" value="<?php echo $precio["codigo_vuelo"] ?>" name="codVuelo" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $precio["codigo_vuelo"] ?>" name="codVuelo"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Asiento</label>
                                <input type="text" class="input-short" value="<?php echo $precio["tipo_campo"] ?>" name="tipoAsiento" disabled="disabled" maxlength="5"/>
                                <input type="hidden"  value="<?php echo $precio["tipo_campo"] ?>" name="tipoAsiento"  maxlength="5"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Precio $</label>
                                <input type="text" class="input-short" value="<?php echo $precio["costo"] ?>"name="costAsiento" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                    <label>Codigo Vuelo</label>
                                    
                                    <select class="input-short" name="codVuelo" maxlength="5">
                                        <?php foreach($vuelos as $vuelo){?>
                                        <option value="<?php echo $vuelo["codigo_vuelo"] ?>"><?php echo $vuelo["codigo_vuelo"] ?></option>
                                    
                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                <label>Tipo Asiento</label>
                                <select class="input-short" name="tipoAsiento">
                                    <option  value="A">Asiento Turista</option>
                                    <option  value="E">Asiento Ejecutivo</option>
                                </select>

                                <p>
                                    <label>Precio $</label>
                                    <input type="text" class="input-short" name="costAsiento" />
                                    <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                            <?php } ?>
                            
                            <!--<a href="listCiudades"><input class="submit-green" value="Guardar"></a>
                            <a href="listCiudades"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listPrecios"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
