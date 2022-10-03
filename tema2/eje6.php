<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO </h2>
			<div class="p-4 m-2">
				<?php

                $carrito = array(
                    array("id" => 1234,"nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
                    array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
                    array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1),
                    array("id" => 1234,"nombre" => "Chaqueta", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
                    array("id" => 1233, "nombre" => "Nintendo Switch", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
                    array("id" => 1232, "nombre" => "SmarthPhone", "precio" => 169.50, "cant" => 5, "iva_r" => 1),
                    array("id" => 1231,"nombre" => "TV LG", "precio" => 799.95, "cant" => 2, "iva_r" => 0),
                    array("id" => 1230, "nombre" => "Xbox", "precio" => 849.95, "cant" => 1, "iva_r" => 0),
                    array("id" => 1229, "nombre" => "Vaqueros", "precio" => 29.95, "cant" => 5, "iva_r" => 1)
                );


				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
