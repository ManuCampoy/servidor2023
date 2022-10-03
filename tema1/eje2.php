<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 2</h2>
			<div class="p-4 m-2">
				<?php

                    $cadena1 = "Hola a todo el mundo.";
                    $cadena2 = "Mi nombre es Manuel Campoy Modesto";

                    echo "<b> - Concatenación de las dos cadenas.</b><br>";
                    $cadena3 = $cadena1." ".$cadena2;
                    echo $cadena3."<br>";

                    echo"<br>";
                    
                    $cadena1 .= $cadena1.$cadena2;

                    echo "<b> - Concatenación de la primera cadena con sigo misma y con la segunda cadena.</b><br>";
                    echo $cadena1;


				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
