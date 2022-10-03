<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 9</h2>
			<div class="p-4 m-2">
				<?php

                    echo "<b>9. CREAR 5 CÍRCULOS DE COLORES ALEAOTRIOS.</b><br>"; 
                                        
                    for($i=0;$i<5;$i++){

                        echo "<svg height='100' width='100'>";
                        echo "<circle cx='50'cy='50' r='40' stroke='black' stroke-width='3' fill='rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")'/>";
                        echo "</svg>";

                    }

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
