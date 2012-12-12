<?php
    

    $this->sublinks = Array( Array("Principal", "usuarios" ), Array("Listado", "listUsuarios" ) );
    $this->menuCurrent = "usuarios";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Usuarios</span></h2>
                        
                     <div class="module-body">
                        <form action="listUsuarios" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($usuarios as $usuario){ $vcantReg=1?>
                            <p>
                                <label>Codigo Usuario</label>
                                <input type="text" class="input-short" value="<?php echo $usuario["codigo_usuario"] ?>" name="editUsuario" disabled="disabled" maxlength="10"/>
                                <input type="hidden"  value="<?php echo $usuario["codigo_usuario"] ?>" name="editUsuario"  maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Password</label>
                                <input type="password" class="input-short" value="<?php echo $usuario["password"] ?>"name="usPassw" maxlength="15"/>
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Usuario</label>
                                <select class="input-short" name="usTipo">
                                    <option <?php if ($usuario["tipo_usuario"] == "I")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?>  value="I">Interno</option>
                                    <option <?php if ($usuario["tipo_usuario"] == "E")
                                                      {
                                                          echo "selected";
                                                      }
                                              ?> value="E">Externo</option>
                                </select>

                           <p>
                                    
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                            <p>
                                <label>Codigo Usuario</label>
                                <input type="text" class="input-short" name="editUsuario" maxlength="10"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Password</label>
                                <input type="password" class="input-short" value="<?php echo $usuario["nombre_usuario"] ?>"name="usPassw" maxlength="15"/>
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Tipo Usuario</label>
                                <select class="input-short" name="usTipo">
                                    <option value="I">Interno</option>
                                    <option value="E">Externo</option>
                                </select>

                           <p>
                            <?php } ?>
                            
                            <!--<a href="listUsuarios"><input class="submit-green" value="Guardar"></a>
                            <a href="listUsuarios"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listUsuarios"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        <div style="clear:both;"></div>
