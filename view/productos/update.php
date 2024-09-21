<div class="mt-5">
    <h4 class="display-4"> Actualizar Producto </h4>
</div>
  <?php
        foreach ($prod as $pro){
    ?>
    <form action="<?php echo getUrl("Productos","Productos","postUpdate"); ?>" method="post"><!-- /../../ es para devolverse en la ruta de las carpetas-->
    <br>
    <div class="row mt-5">
        <input type="hidden" name="id_pro" value="<?php echo $pro['codigoProduc']?>" class="form-control">
        <br>
        <input type="hidden" name="nombre" value="<?php echo $pro['nombre']?>" class="form-control">
        <br>
        <input type="hidden" name="iniCan" value="<?php echo $pro['cantidad']?>" class="form-control">
        <br>

        <div class="form-group col-md-6">
        <label for="">Nuevo Precio</label>
        <input type="number" name="NPrecio" value="<?php echo $pro['precio']?>" class="form-control">
        </div>
        <div class="form-group col-md-6">
        <label for="">Nuevas cantidades</label>
        <input type="number" name="Ncantidad" placeholder="Ingrese las nuevas cantidades" class="form-control">
        </div>
        <button class= " btn btn-outline-info mt-5  btn-lg" type="submit">Guardar Cambios</button>
    </form>
    </div>
    <?php
        }
    ?>
    <a href='consult.php'>
        <button class= " btn btn-outline-warning mt-5  btn-lg">Volver</button>
    </a>
 </div>
</body>
</html>