<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 4</h2>
			<div class="p-4 m-2">
				<?php


                    $a = rand(0,9);
                    $b = rand(0,9);
                    $c = rand(0,9);

                    echo "<b>4. Solución de la ecuación ".$a."x2 + ".$b."x + ".$c.".</b><br><br>";

                    $discriminante = pow($b,2)-(4*($a*$c));

                    if($a==0){


                        echo "No hay solución ya que no se puede dividir entre cero.";

                    }else if($discriminante<0){

                        echo "No hay solución real. Raíz negativa.";

                    }else{
 
                        $solucion1 = (-$b+sqrt($discriminante))/(2*$a);
                        $solucion2 = (-$b-sqrt($discriminante))/(2*$a);
                        echo "Las solución de la ecuación son: ".round($solucion1,2)." y ",round($solucion2,2);


                    }
                     

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
