<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

    <div class="col-md-8 themed-grid-col">
        <div class="flex-shrink-0 p-3 bg-white">
            
            <?php

                echo "Primer ejemplo";
                //Ej1. Hacer una tabla 5x3 desde php y rellenarla
                //1 2 3
                //4 5 6
                //7 8 9
                //10 11 12
                //13 14 15

                //Crear una tabla de 5 filas
                echo "<table>";
                $cont = 1;
                for($i=0;$i<5;$i++){

                    echo "<tr>";

                    for($j=0;$j<3;$j++){

                        echo "<td>".$cont."</td>"; 
                        $cont++;
                        
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
            </div>
        </div>
    </div>


<?php
    include_once("../pie.php");
?>
