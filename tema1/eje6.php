<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 6</h2>
			<div class="p-4 m-2">
				<?php

                    $letrasDNI = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];

                    $dni = rand(10000000,99999999);

                    echo "<b>6. CALCULAR LA LETRA AL DNI ".$dni."</b><br>";
                    
                    $modulo = $dni%23;

                    foreach($letrasDNI as $clave => $valor){

                        if($modulo==$clave){

                            echo "El DNI sería: <b>".$dni."-".$valor."</b>";

                        }
                    }

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
