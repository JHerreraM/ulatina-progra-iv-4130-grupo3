<?php


    $this->sublinks = Array( Array("Principal", "aviones" ), Array("Listado", "listAviones" ) );
    $this->menuCurrent = "vuelos";
?>  
         <div class="grid_12"> 
                <div class="bottom-spacing">
                
                    
                    <!-- Table records filtering -->
                    Filtro: 
                    <select class="input-short">
                    	<option value="1" selected="selected">Seleccione Filtro</option>
                        <option value="2">Hoy</option>
                        <option value="3">Ultima Semana</option>
                        <option value="4">Ultimo Mes</option>
                    </select>
                    
                </div>

                <!-- Example table -->
                <div class="module">
                	<h2><span>Listado de Vuelos</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:13%">Codigo Vuelo</th>
                                    <th style="width:13%">Origen</th>
                                    <th style="width:13%">Destino</th>
                                    <th style="width:13%">Avion</th>
                                    <th style="width:8%">Salida</th>
                                    <th style="width:8%">Llegada</th>
                                    <th style="width:13%">Duracion Estimada</th>
                                    <th style="width:13%">Tripulacion</th>
                                    <th style="width:13%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($vuelos as $vuelo){  ?>      
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><?php echo $vuelo["codigo"] ?></td>
                                    <td><?php echo $vuelo["nombreOrigen"] ?></td>
                                    <td><?php echo $vuelo["nombreDestino"] ?></td>
                                    <td><?php echo $vuelo["placa_avion"] ?></td>
                                    <td><?php echo $vuelo["tiempo_salida"] ?></td>
                                    <td><?php echo $vuelo["tiempo_llegada"] ?></td>
                                    <td><?php echo $vuelo["duracion_estimada"] ?></td>
                                    <td><?php echo $vuelo["numeroTripulacion"] ?></td>
                                   
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="../images/tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="../images/balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="../images/bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
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
         </div>
