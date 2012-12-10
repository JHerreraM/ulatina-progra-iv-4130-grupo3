<?php

    $this->sublinks = Array( Array("Principal", "personal" ), Array("Listado", "listPersonal" ) );
    $this->menuCurrent = "personal";
?>  

                <!-- Example table -->
                <div class="module">
                    <?php if (isset($mensajeCorr)){  ?>      
                    <div>
                        <span class="notification n-success"><?php echo $mensajeCorr?></span>
                    </div>
                    <?php } ?> 
                    
                	<h2><span>Listado de Personal</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:2%">#</th>
                                    <th style="width:8%">Identificación</th>
                                    <th style="width:8%">Fecha Nacimiento</th>
                                    <th style="width:5%">Gnro.</th>
                                    <th style="width:15%">Nombre</th>
                                    <th style="width:15%">Dirección</th>
                                    <th style="width:10%">Email</th>
                                    <th style="width:7%">Tel Principal</th>
                                    <th style="width:7%">Tel Secundario</th>
                                    <th style="width:3%">Pais</th>
                                    <th style="width:5%">Tipo Sangre</th>
                                    <th style="width:5%">Horas Vuelo</th>
                                    <th style="width:15%">Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $cont = 0;
                                ?>  
                                <?php foreach($personal as $person){ $cont = $cont + 1;?>      
                                <tr>
                                    <td class="align-center"><?php echo $cont ?></td>
                                    <td><?php echo $person["identificacion"] ?></td>
                                    <td><?php echo $person["fecha_nacimiento"] ?></td>
                                    <td><?php echo $person["genero"] ?></td>
                                    <td><?php echo $person["nombre_completo"] ?></td>
                                    <td><?php echo $person["direccion"] ?></td>
                                    <td><?php echo $person["email"] ?></td>
                                    <td><?php echo $person["tel_principal"] ?></td>
                                    <td><?php echo $person["tel_secundario"] ?></td>
                                    <td><?php echo $person["codigo_pais"] ?></td>
                                    <td><?php echo $person["tipo_sangre"] ?></td>
                                    <td><?php echo $person["horas_vuelo"] ?></td>
                                    <td>
                                    	<input type="checkbox" name="perBorrar[]" value ="<?php echo $pais["codigo_pais"] ?>"/>
                                        <a href="listPersonal?tipIdEdit=<?php echo $person["tipo_identificacion"] ?>&numIdEdit=<?php echo $person["identificacion"] ?>&accionSelec=4"><img src="../images/minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published"></a>
                                        <a href="editPersonal?tipIdEdit=<?php echo $person["tipo_identificacion"] ?>&numIdEdit=<?php echo $person["identificacion"] ?>"><img src="../images/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                    </td>
                                </tr>
                              <?php } ?>      

                            </tbody>
                        </table>
                        <a href="editPersonal"><input class="submit-green" type="button" value="Agregar"></a></br></br>
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