<?php
 
    $this->sublinks = Array( Array("Principal", "aeropuertos" ), Array("Listado", "listAeropuertos" ) );
    $this->menuCurrent = "aeropuertos";
?>  

                <!-- Example table -->
                <div class="module">
                	<h2><span>Listado de Aeropuertos</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:13%">Cod. Pais</th>
                                    <th style="width:13%">Cod. Ciudad</th>
                                    <th style="width:13%">Cod. Aeropuerto</th>
                                    <th style="width:30%">Nombre</th>
                                    <th style="width:15%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($aeropuertos as $aeropuerto){ ?>      
                                <tr>
                                    <td class="align-center">1</td>
                                    
                                    <td><?php echo $aeropuerto["codigo_pais"] ?></td>
                                    <td><?php echo $aeropuerto["codigo_ciudad"] ?></td>
                                    <td><?php echo $aeropuerto["codigo_aeropuerto"] ?></td>
                                    <td><?php echo $aeropuerto["nombre_aeropuerto"] ?></td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="../images/tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="editAeropuertos?paisEdit=<?php echo $aeropuerto["codigo_pais"] ?>&ciudadEdit=<?php echo $aeropuerto["codigo_ciudad"] ?>&aeroEdit=<?php echo $aeropuerto["codigo_aeropuerto"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="../images/balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="../images/bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
                            
                        <a href="editAeropuertos"><input class="submit-green" type="button" value="Agregar"></a></br></br>    
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