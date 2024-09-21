<?php

    foreach($productos as $produc){
        echo "<tr>";
                    echo "<td>".$produc['codigoProduc']."</td>";
                    echo "<td>".$produc['nombre']."</td>";
                    echo "<td>".$produc['precio']."</td>";
                    echo "<td>".$produc['cantidad']."</td>";
                    echo "<td>".$produc['nombreCate']."</td>";
                    echo "<td>"
                            ."<a href='update.php?id=".$produc['codigoProduc']."'>"
                                ."<button  class='btn btn-warning'>Editar</button>"
                            ."</a>"
                        ."</td>";
                    echo "<td>"
                            ."<a href='delete.php?id=".$produc['codigoProduc']."'>"
                                ."<button class='btn btn-danger'>Eliminar</button>"
                            ."</a>"
                        ."</td>";
                echo "</tr>";
    }
?>