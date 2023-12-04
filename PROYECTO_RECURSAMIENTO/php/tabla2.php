<?php
    include('bd.php');
    $sql = "SELECT * FROM manteles";
    $getId_man = mysqli_query($con, $sql);

    $a=-1;
                // Ejecutar la consulta y obtener los resultados
                $result = $con->query($sql);
                
                // Verificar si hay preguntas disponibles
                if ($result->num_rows > 0) {
                    // Recorrer cada pregunta
                    while ($row = $result->fetch_assoc()) {
                        $id_ma1 = $row['ID_MANTELES'];
                        $nombre1 = $row['NOMBRE'];
                        $color1 = $row['COLOR'];
                        $tamaño1 = $row['TAMAÑO'];
                        $costo1 = $row['COSTO'];
                        $existencia1 = $row['EXISTENCIA'];
                        $cantidad1 = $row['CANTIDAD'];
                        $observaciones1 = $row['OBSERVACIONES'];

                        $id1[]=$id_ma1;

                        $nom1[]=$nombre1;

                        $col1[]=$color1;

                        $tam1[]=$tamaño1;

                        $cos1[]=$costo1;

                        $exis1[]=$existencia1;

                        $cant1[]=$cantidad1;

                        $obse1[]=$observaciones1;

                        }
                         
                        echo("<table>");
                        echo("<thead>");
                        echo("<tr>");
                        echo("<th>ID</th>");
                        echo("<th>NOMBRE</th>");
                        echo("<th>COLOR</th>");
                        echo("<th>TAMAÑO</th>");
                        echo("<th>COSTO</th>");
                        echo("<th>EXISTENCIA</th>");
                        echo("<th>CANTIDAD</th>");
                        echo("<th>OBSERVACIONES</th>");
                        echo("</tr>");
                        echo("</thead>");
                        echo("<tbody>");
                        while($row = mysqli_fetch_array($getId_man)){
                            $a++;
                            echo("<tr>");
                            echo("<td> $id1[$a] </td>");
                            echo("<td> $nom1[$a] </td>");
                            echo("<td> $col1[$a] </td>");
                            echo("<td> $tam1[$a] </td>");
                            echo("<td> $cos1[$a] </td>");
                            echo("<td> $exis1[$a] </td>");
                            echo("<td> $cant1[$a] </td>");
                            echo("<td> $obse1[$a] </td>");
                            echo("</tr>");
                        }
                        echo("</tbody>");
                        echo("</table>");
                        }
                        
                        else {
                            echo "<div>No hay manteles disponible.</div>";
                        }
                        
                        // Cerrar la conexión a la base de datos
                        $con->close();
?>