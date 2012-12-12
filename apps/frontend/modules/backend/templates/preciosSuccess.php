<?php

    $this->sublinks = Array( Array("Principal", "precios" )/*, Array("Listado", "listCiudades" )*/ );
    $this->menuCurrent = "precios";
?> 
<div class="module">
<h2><span>Precio Tiquetes</span></h2>

<div class="module-body">
   <form action="editPrecios" method="POST">
    <p>
    <label>Codigo Vuelo</label>

    <select class="input-short" name="codVuelo" maxlength="5">
        <?php foreach($vuelos as $vuelo){?>
        <option value="<?php echo $vuelo["codigo_vuelo"] ?>"><?php echo $vuelo["codigo_vuelo"] ?></option>

        <?php } ?>
    </select>
    <!--<input type="text" class="input-short" name="codPaisAnt" maxlength="5"/>
     Form elements <span class="notification-input ni-correct">This is correct, thanks!</span>--> 
    </p>
<input class="submit-green" type="submit" value="Aceptar"></a></br></br>
</form>
    </div> <!-- End .module-body -->

</div>  <!-- End .module -->
<div style="clear:both;"></div>