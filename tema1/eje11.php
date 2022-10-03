<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 11</h2>
			<div class="p-4 m-2">
				<?php

                    echo "<b>11. CREAR UNA MATRIZ 7X7 DONDE LA DIAGONAL SEA 1.</b><br>";
 
                    for($i=0;$i<7;$i++){
                        for($j=0;$j<7;$j++){
 
                            if($i==$j){

                                echo "<b> 1 </b>";

                            }else{

                                echo rand(0,9)." ";

                            }
                        }
                        echo "<br>";
                    }
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
