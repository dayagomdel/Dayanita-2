<body>
    <div class="container">
        <h1>Productos</h1>
        <div>
        <input type="text" name="filtro" id="filtro" placeholder="Buscar..." data-url="<?=getUrl("Productos","Productos","filtro",false,"ajax");?>"><br><br> 
        <div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($producto as $produc) {
                    echo "<tr>";
                        echo "<td>" . $produc['codigoProduc'] . "</td>";
                            echo "<td>" . $produc['nombre'] . "</td>";
                            echo "<td>" . number_format( $produc['precio'],'0',',','.'). "</td>";
                            echo "<td>" . $produc['cantidad'] . "</td>";
                            echo "<td>" . $produc['nombreCate'] . "</td>";
                        echo "<td>";
                            echo "<a href='" . getUrl("Rol", "Rol", "getUpdate", array("id" => $produc['codigoProduc'])) . "'>";
                                echo "<button  class= 'btn btn-warning'>Editar</button>";
                            echo "</a>";
                            echo "</td>";
                            echo "<td>";
                                echo "<a href='" . getUrl("Rol", "Rol", "getDelete", array("id" => $produc['codigoProduc'])) . "'>";
                                    echo "<button  class= 'btn btn-danger'>Eliminar</button>";
                            echo "</a>";
                        echo "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>

        <a href='../web/index.php'>
            <br><br>
            <button class="btn btn-outline-danger mt-2  btn-lg">Volver</button>
        </a>

    </div>

    </html>