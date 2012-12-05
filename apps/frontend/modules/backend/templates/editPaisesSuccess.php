<?php
    $sf_response->addStylesheet('reset');
    $sf_response->addStylesheet('grid');
    $sf_response->addStylesheet('styles');
    $sf_response->addStylesheet('jquery.wysiwyg.css');
    $sf_response->addStylesheet('tablesorter.css');
    $sf_response->addStylesheet('thickbox.css');
    $sf_response->addStylesheet('theme-blue.css');
    $sf_response->addStylesheet('jquery.wysiwyg.css');
    $sf_response->addStylesheet('tablesorter.css');
    $sf_response->addJavascript('jquery-1.3.2.min.js');
    $sf_response->addJavascript('jquery.tablesorter.min.js');
    $sf_response->addJavascript('jquery.tablesorter.pager.js');
    $sf_response->addJavascript('jquery.pstrength-min.1.2.js');
    $sf_response->addJavascript('thickbox');

    $this->sublinks = Array( Array("Principal", "paises" ), Array("Listado", "listPaises" ) );
    $this->menuCurrent = "paises";
?>  
<!-- Form elements -->    
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Form</span></h2>
                        
                     <div class="module-body">
                        <form action="guardaPaises" >
                        <?php foreach($paises as $pais){ ?>
                            <p>
                                <label>Codigo Pais</label>
                                <input type="text" class="input-short" value="<?php echo $pais["codigo_pais"] ?>" name="codPaisNuevo"/>
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
            </div> <!-- End .grid_12 -->
