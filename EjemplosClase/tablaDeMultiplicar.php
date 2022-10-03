<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php

                //TABLA DE MULTIPLICAR DE UNA VARIABLE
                $num = 6;

                for($i=0;$i<=10;$i++){

                    echo $num." x ".$i." = ".($num*$i)."<br>";

                }

			?>
		</div>
	  </div> 

<?php
    include_once("../pie.php");
?>
