<div style="float: right; padding-top: 50px; padding-right: 5px;">
   <?php 
                                        if(sizeOf($reservaciones) > 0 ){
                                            foreach($reservaciones as $reservacion){ ?>
                                        <tr>
                                            <td>
                                            <table style="border-spacing: 10px;border-style: solid;" width="500px">
                                                <tr style="background: lightskyblue;">
                                                    <td>
                                                        NUMERO DE VUELO<br>

                                                    </td>
                                                    <td colspan="2">SALIDA</td>
                                                    <td>LLEGADA</td>
                                                </tr>
                                                <tr style="height: 30px;border-style: solid;border-width: 1px;">
                                                    <td rowspan="3">
                                                        <?php echo "A" . $reservacion["vuelo"] ?> ->
                                                        <?php echo "A" . $reservacion["asiento"] ?> 
                                                        <br>
                                                        <div style="font:red">
                                                        <?php
                                                            $pkidVuelo = $reservacion["pkid"];
                                                            
                                                            echo link_to('Cancelar Reservacion', "principal/cancelarReservacion?id=$pkidVuelo", 'post=true') ;
                                                        ?>
                                                        </div>
                                                    </td>
                                                    <td colspan="2"><?php echo $reservacion["salida"] ?></td>
                                                    <td><?php echo $reservacion["llegada"] ?></td>
                                                </tr>
                                                <tr style="margin-top: 100px;">
                                                    <td>ORIGEN</td>
                                                    <td>DESTINO</td>
                                                    <td>DURACION</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $reservacion["origen"] ?></td>
                                                    <td><?php echo $reservacion["destino"] ?></td>
                                                    <td><?php echo $reservacion["duracion"] ?> Minutos</td>
                                                </tr>
                                            </table>

                                            </td>
                                        </tr> 
                                    <?php }
                                        
                                        } else {
                                            $this->noResultadosFlag = true;
                                            echo "No se Encontraron Resultados.";
                                        }
                                        
                                        ?> 
   
    
    
</div>
<div style="width:300px; heigth: 500px; background: lightgrey; padding-top: 25px; padding-bottom: 25px; padding-left: 25px; padding-right: 25px; height: 300px;">

   Bienvenido <br><?php  echo $_SESSION["nombreCliente"]; ?>
   <div style="margin-top: 100px; float: right">
      <?php echo link_to('Logout', "principal/logout", 'post=true') ;  ?>
   </div>
   
    
</div>
