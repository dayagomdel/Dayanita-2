
<div class="mt-5">
    <h4 class="display-4"> Eliminar Producto </h4>
</div>

    <?php
        foreach ($producto as $produc) {
    ?>
    <div class="container">
    <div> 
           <h3 class="display-4">
            Eliminar Producto
           </h3> 
    </div>
    
    

    <form action="<?php echo getUrl("Productos","Productos","postDelete"); ?>" method="post">
    <div class="row mt-5">
    <input type="hidden" name="codPro" value="<?php echo $produc['codigoProduc']?> "class="form-control">
        <br>
        <div class="form-group col-md-6"> 
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $produc['nombre']?>" class="form-control"readonly>
        <br><br>
        </div>
        <div class="form-group col-md-6"> 
        <label for="">Precio</label>
        <input type="number" name="Precio"value="<?php echo $produc['precio']?>"class="form-control" readonly>
        <br><br>
        </div>
        <div class="form-group col-md-6"> 
        <label for="">Categoria</label>
        <input type="text" name="nombrecate" value="<?php echo $produc['nombreCate']?>"class="form-control" readonly>
        <br><br>
        <button class= " btn btn-outline-danger mt-5  btn-lg" type="submit">Eliminar</button>
        </div>
    </form>
    </div>
    <?php
        }
    ?>
    <a href='../producto/consult.php'>
        
        <button class= " btn btn-outline-info mt-5  btn-lg">Volver</button>
    </a>
 </div>