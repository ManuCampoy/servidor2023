<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 8</h2>
			<div class="p-4 m-2">
				<?php

                    echo "<b> 8. SORTEO DE LA LOTERÍA. </b><br>";

                    $loteria = rand(0,99999);

                    if($loteria<10){

                        $loteria = "0000".$loteria;

                    }else if($loteria<100){

                        $loteria = "000".$loteria;

                    }else if($loteria<1000){

                        $loteria = "00".$loteria;

                    }else if($loteria<10000){

                        $loteria = "0".$loteria;

                    }

                    echo "El número premiado ha sido el <b>".$loteria."</b>";
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
