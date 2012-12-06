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
                                <input type="text" class="input-short" value="<?php echo $avion["marca"] ?>" name="avMarca" disabled="disabled" maxlength="20"/>
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
                                <select class="input-short">
                                    <option <?php $avion["estado"] == "E" ?> value="E">En Taller</option>
                                    <option value="A">Activo</option>
                                </select>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                                
                            <p>
                                <label>E-Mail</label>
                                <input type="text" class="input-short" value="<?php echo $avion["email"] ?>" name="eMail" maxlength="75"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Principal</label>
                                <input type="text" class="input-short" value="<?php echo $avion["tel_principal"] ?>" name="telPrincipal" maxlength="20"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Telefono Secundario</label>
                                <input type="text" class="input-short" value="<?php echo $avion["tel_secundario"] ?>" name="telSecundario" maxlength="20"/>
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
                                    <label>Tipo Identificacion</label>
                                    <input type="text" class="input-short" name="tipoIdentif" maxlength="1" value ="C"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Numero Identificacion</label>
                                    <input type="text" class="input-short" name="numIdentif" maxlength="30"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Nombre</label>
                                    <input type="text" class="input-short" name="nomCompleto" maxlength="150"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Fecha Nacimiento</label>
                                    <input type="date" class="input-short" name="fecNacimiento" maxlength="10"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Genero</label>
                                    <input type="text" class="input-short" name="tipoGenero" maxlength="1"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>Codigo Pais</label>
                                    
                                    <select class="input-short" name="codPais" maxlength="5">
                                        <?php foreach($paises as $pais){?>
                                        <option value="<?php echo $pais["codigo_pais"] ?>"><?php echo $pais["nacionalidad"] ?></option>
                                    
                                        <?php } ?>
                                    </select>
                                    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
                                     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>
                                
                                <p>
                                    <label>E-Mail</label>
                                    <input type="text" class="input-short" name="eMail" maxlength="75"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Telefono Principal</label>
                                    <input type="text" class="input-short" name="telPrincipal" maxlength="20"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Telefono Secundario</label>
                                    <input type="text" class="input-short" name="telSecundario" maxlength="20"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Tipo Sangre</label>
                                    <input type="text" class="input-short" name="tipoSangre" maxlength="3"/>
                                    <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                                </p>

                                <p>
                                    <label>Direccion</label>
                                    <textarea rows="7" cols="90" class="input-medium"  name="direcEsp" >
                                    </textarea>
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
                            <a href="listClientes"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
