<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 1</h2>
			<div class="p-4 m-2">
				<?php

					//La función proporciona un número aleatorio dentro del rango
					//que se le pasa por parámetro.
					$primera  = rand(0,99);
					$segunda = rand(0,99);

					$diferencia = $primera - $segunda;
					echo "<b>1. Mostrar la diferencia entre ".$primera." y ".$segunda."<br></b>"; 
					echo "El resultado de ".$primera." - ".$segunda." = ".$diferencia." <br>";
					echo "<br>";

					
					echo "<b> 1. Mostrar la división entre ".$primera." y ".$segunda."<br></b> ";
					if($segunda==0){

						echo " No se puede dividir entre cero";
						
					}else{

						$division = $primera/$segunda;
						echo "El resultado de ".$primera." / ".$segunda." = ".$division;

					}

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
