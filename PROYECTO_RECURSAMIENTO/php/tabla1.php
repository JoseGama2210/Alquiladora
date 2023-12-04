<?php
    include('bd.php');
    $sql = "SELECT * FROM mobiliario";
    $getId_mob = mysqli_query($con, $sql);

    $i=-1;
                // Ejecutar la consulta y obtener los resultados
                $result = $con->query($sql);
                
                // Verificar si hay preguntas disponibles
                if ($result->num_rows > 0) {
                    // Recorrer cada pregunta
                    while ($row = $result->fetch_assoc()) {
                        $id_mo = $row['ID_MOBILIARIO'];
                        $nombre = $row['NOMBRE'];
                        $descripcion = $row['DESCRIPCION'];
                        $costo = $row['COSTO'];
                        $existencia = $row['EXISTENCIA'];
                        $cantidad = $row['CANTIDAD'];
                        $observaciones = $row['OBSERVACIONES'];

                        $id[]=$id_mo;

                        $nom[]=$nombre;

                        $des[]=$descripcion;

                        $cos[]=$costo;

                        $exis[]=$existencia;

                        $cant[]=$cantidad;

                        $obse[]=$observaciones;

                        }
                         
                        echo("<table>");
                        echo("<thead>");
                        echo("<tr>");
                        echo("<th>ID</th>");
                        echo("<th>NOMBRE</th>");
                        echo("<th>DESCRIPCION</th>");
                        echo("<th>COSTO</th>");
                        echo("<th>EXISTENCIA</th>");
                        echo("<th>CANTIDAD</th>");
                        echo("<th>OBSERVACIONES</th>");
                        echo("</tr>");
                        echo("</thead>");
                        echo("<tbody>");
                        while($row = mysqli_fetch_array($getId_mob)){
                            $i++;
                            echo("<tr>");
                            echo("<td> $id[$i] </td>");
                            echo("<td> $nom[$i] </td>");
                            echo("<td> $des[$i] </td>");
                            echo("<td> $cos[$i] </td>");
                            echo("<td> $exis[$i] </td>");
                            echo("<td> $cant[$i] </td>");
                            echo("<td> $obse[$i] </td>");
                            echo("</tr>");
                        }
                        echo("</tbody>");
                        echo("</table>");
                        }
                        
                        else {
                            echo "<div>No hay mobiliario disponible.</div>";
                        }
                        
                        // Cerrar la conexión a la base de datos
                        $con->close();
?>