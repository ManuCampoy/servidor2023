<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-8 themed-grid-col">
        <div class="flex-shrink-0 p-3 bg-white">
            <h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 14</h2>
            <div class="p-4 m-2">
                <?php 

                    $notas = array(
                        array("nombre" => "Manuel", "materia" => "Diseño", "nota" => 9),
                        array("nombre" => "Manuel", "materia" => "Servidor", "nota" => 6),
                        array("nombre" => "Manuel", "materia" => "Cliente", "nota" => 7),
                        array("nombre" => "Manuel", "materia" => "Despliegue", "nota" => 8),
                        array("nombre" => "Manuel", "materia" => "Libre Configuración", "nota" => 10),
                        array("nombre" => "Natalia", "materia" => "Diseño", "nota" => 9),
                        array("nombre" => "Natalia", "materia" => "Servidor", "nota" => 4),
                        array("nombre" => "Natalia", "materia" => "Cliente", "nota" => 5),
                        array("nombre" => "Natalia", "materia" => "Despliegue", "nota" => 7),
                        array("nombre" => "Natalia", "materia" => "Libre Configuración", "nota" => 8),
                    );
                    
                    //Ordeno el array 
                    //Notas en orden descendente por alumno.
                    echo "<h4>NOTAS ORDENADAS DE FORMA DESCENDENTE</h4><br>";
                    array_multisort(array_column($notas,"nombre"), SORT_ASC, array_column($notas,"nota"), $notas);
                    foreach ($notas as $valor) {
            
                        echo $valor['nombre']." ha sacado en " .$valor['materia'] . " es de " .$valor['nota']."<br>";
            
                    }
                    
                    echo "<h4>ALUMNOS ORDENADOS POR NOTA DESCENDENTE</h4><br>";
                    asort($notas);
                    foreach ($notas as $valor) {
            
                        echo $valor['nombre']." ha sacado en " .$valor['materia'] . " es de " .$valor['nota']."<br>";
            
                    }
                ?> 
            </div>
        </div>
    </div>
    </div>


    
    
</body>
</html>
<?php
    include_once("../pie.php");
?>
