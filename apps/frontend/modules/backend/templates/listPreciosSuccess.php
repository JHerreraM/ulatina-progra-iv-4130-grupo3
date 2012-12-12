<?php

    $this->sublinks = Array( Array("Principal", "precios" ), Array("Listado", "listPrecios" ) );
    $this->menuCurrent = "precios";
?>                <!-- Example table -->
                <div class="module">
                    <?php if (isset($mensajeCorr)){  ?>      
                    <div>
                        <span class="notification n-success"><?php echo $mensajeCorr?></span>
                    </div>
                    <?php } ?> 
                    
                	<h2><span>Listado de Precios</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:25%">Cod. Vuelo</th>
                                    <th style="width:25%">Tipo Asiento</th>
                                    <th style="width:25%">Precio</th>
                                    <th style="width:5%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $cont = 0;
                                ?> 
                                <?php foreach($precios as $precio){ $cont = $cont + 1;?>      
                                <tr>
                                    <td class="align-center"><?php echo $cont ?></td>
                                    <td><?php echo $precio["codigo_vuelo"] ?></td>
                                    <td><?php echo $precio["tipo_campo"] ?></td>
                                    <td><?php echo $precio["costo"] ?></td>
                                    <td>
                                    	<input type="checkbox" name="perBorrar[]" value ="<?php echo $ciudad["codigo_ciudad"] ?>"/>
                                        <a href="listPrecios?codVuelo=<?php echo $precio["codigo_vuelo"] ?>&tipoAsiento=<?php echo $precio["tipo_campo"] ?>&accionSelec=4"><img src="../images/minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published"></a>
                                        <a href="editPrecios?codVuelo=<?php echo $precio["codigo_vuelo"] ?>&tipoAsiento=<?php echo $precio["tipo_campo"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
                        <a href="editPrecios"><input class="submit-green" type="button" value="Agregar"></a></br></br>
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