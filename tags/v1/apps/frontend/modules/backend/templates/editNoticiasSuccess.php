<?php
    

    $this->sublinks = Array( Array("Principal", "noticias" ), Array("Listado", "listNoticias" ) );
    $this->menuCurrent = "noticias";
?>  
<!-- Form elements -->                
                <div class="module">
                     <h2><span>Noticias</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaNoticias" method="POST">
                        <?$vcantReg=0?>    
                        <?php foreach($noticias as $noticia){ $vcantReg=1?>
                            <p>
                                <label>Fecha</label>
                                <input type="date" class="input-short" value="<?php echo $noticia["fecha"] ?>" name="noFecha" maxlength="5"/>
                                
                                <input type="hidden" class="input-short" value="<?php echo $noticia["pkid"] ?>" name="noticiaId"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Titulo</label>
                                <input type="text" class="input-short" value="<?php echo $noticia["titulo"] ?>"name="noTitulo" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Contenido</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="noContenido" >
                                <?php echo $noticia["contenido"] ?>
                                </textarea>
                            </p>
                            
                            <?php } ?>
                            <input type="hidden" value="<?php echo $vcantReg?>"name="cantReg"/>
                            <?php 
                                if ($vcantReg==0) 
                                {
                            ?>
                                <p>
                                <label>Fecha</label>
                                <input type="date" class="input-short" value="<?php echo $noticia["fecha"] ?>" name="noFecha" maxlength="5"/>
                                
                                <input type="hidden" class="input-short" value="<?php echo $noticia["pkid"] ?>" name="noticiaId"/>
                                <!-- Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Titulo</label>
                                <input type="text" class="input-short" value="<?php echo $noticia["titulo"] ?>"name="noTitulo" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>--> 
                            </p>
                            
                            <p>
                                <label>Contenido</label>
                                <textarea rows="7" cols="90" class="input-medium"  name="noContenido" >
                                
                                </textarea>
                            </p>
                            <?php } ?>
                            
                            <!--<a href="listPaises"><input class="submit-green" value="Guardar"></a>
                            <a href="listPaises"><input class="submit-gray" value="Cancelar"></a>
                            <input class="submit-gray" type="submit" value="Cancel">
                            
                            -->
                            
                            <input class="submit-green" type="submit" value="Guardar"></a>
                            <a href="listNoticias"><input class="submit-gray" type="button" value="Cancelar"></a>
                            
                            
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
