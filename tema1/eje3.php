<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 3</h2>
			<div class="p-4 m-2">
				<?php

                    $radio = rand(1,99);

                    $volumen = (4*pi()*pow($radio,3))/3;

                    echo "<b>3. Calcula el radio del círculo de radio ".$radio."cm </b><br><br>";
                    echo "El volumen es de ".round($volumen,2)."cm";
                    
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
