<?php

    $this->sublinks = Array( Array("Principal", "vuelos" ), Array("Listado", "listVuelos" ) );
    $this->menuCurrent = "vuelos";
?>  

                <!-- Example table -->
                <div class="module">
                    <?php if (isset($mensajeCorr)){  ?>      
                    <div>
                        <span class="notification n-success"><?php echo $mensajeCorr?></span>
                    </div>
                    <?php } ?> 
                    
                	<h2><span>Listado de Reservas</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:10%">Asiento</th>
                                    <th style="width:40%">Cliente</th>
                                    <th style="width:10%">Precio</th>
                                    <th style="width:5%">Forma Pago</th>
                                    <th style="width:5%">Estado</th>
                                    <th style="width:5%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $cont = 0;
                                ?> 
                                <?php foreach($reservas as $reserva){ $cont = $cont + 1;?>      
                                <tr>
                                    <td class="align-center"><?php echo $cont ?></td>
                                    <td><?php echo $reserva["codigo_asiento"] ?></td>
                                    <td><?php echo $reserva["nombre_completo"] ?></td>
                                    <td><?php echo $reserva["precio_tiquete"] ?></td>
                                    <td><?php echo $reserva["forma_pago"] ?></td>
                                    <td><?php echo $reserva["estado_tiquete"] ?></td>
                                    <td>
                                    	<input type="checkbox" name="perBorrar[]" value ="<?php echo $reserva["codigo_reserva"] ?>"/>
                                        <a href="listReservas?codVuelo=<?php echo $reserva["codigo_vuelo"] ?>&codAsiento=<?php echo $reserva["codigo_asiento"] ?>&accionSelec=4"><img src="../images/minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published"></a>
                                        <a href="editReservas?codVuelo=<?php echo $reserva["codigo_vuelo"] ?>&codAsiento=<?php echo $reserva["codigo_asiento"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
                        <a href="editReservas?codVuelo=<?php echo $vueloRes ?>"><input class="submit-green" type="button" value="Agregar"></a></br></br>
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