<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 10</h2>
			<div class="p-4 m-2">
				<?php

                    echo "<b>10. MOSTRAR LA MEDIA DE LOS NÚMEROS QUE ESTÁN EN POSICIONES PARES Y MOSTRAR LOS IMPARES.</b><br>"; 

                    $miArray = [1,2,3,4,5,6,7,8,9,10];
                    $suma = 0;
                    $cont = 0;

                    echo "Los números impares son: ";
                    foreach($miArray as $clave => $valor){

                        if($clave%2==0){

                            $cont++;
                            $suma += $clave;
                            echo "<b>".$valor."</b>";
                        }

                    }
                     
                    echo "<br>";
                    $media = $suma/$cont;
                    echo "La media de los números en la posición par es: <b>".$media."</b>";

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
