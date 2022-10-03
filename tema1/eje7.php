<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 7</h2>
			<div class="p-4 m-2">
				<?php

                    $miArray = [1,2,3,4,5];

                    foreach($miArray as $clave => $valor){

                        echo "<b>TABLA DEL ".$valor."</b><br>";
                        for($i=0;$i<=10;$i++){

                            echo $valor." X ".$i." = ".($valor*$i)."<br>";

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
