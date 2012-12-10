<?php

    $this->sublinks = Array( Array("Principal", "ciudades" ), Array("Listado", "listCiudades" ) );
    $this->menuCurrent = "ciudades";
?>  

                <!-- Example table -->
                <div class="module">
                    <?php if (isset($mensajeCorr)){  ?>      
                    <div>
                        <span class="notification n-success"><?php echo $mensajeCorr?></span>
                    </div>
                    <?php } ?> 
                    
                	<h2><span>Listado de Ciudades</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:15%">Cod. País</th>
                                    <th style="width:15%">Cod. Ciudad</th>
                                    <th style="width:45%">Nombre Ciudad</th>
                                    <th style="width:5%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $cont = 0;
                                ?> 
                                <?php foreach($ciudades as $ciudad){ $cont = $cont + 1;?>      
                                <tr>
                                    <td class="align-center"><?php echo $cont ?></td>
                                    <td><?php echo $ciudad["codigo_pais"] ?></td>
                                    <td><?php echo $ciudad["codigo_ciudad"] ?></td>
                                    <td><?php echo $ciudad["nombre_ciudad"] ?></td>
                                    <td>
                                    	<input type="checkbox" name="perBorrar[]" value ="<?php echo $ciudad["codigo_ciudad"] ?>"/>
                                        <a href="listCiudades?paisEdit=<?php echo $ciudad["codigo_pais"] ?>&ciudadEdit=<?php echo $ciudad["codigo_ciudad"] ?>&accionSelec=4"><img src="../images/minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published"></a>
                                        <a href="editCiudades?paisEdit=<?php echo $ciudad["codigo_pais"] ?>&ciudadEdit=<?php echo $ciudad["codigo_ciudad"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
                        <a href="editCiudades"><input class="submit-green" type="button" value="Agregar"></a></br></br>
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