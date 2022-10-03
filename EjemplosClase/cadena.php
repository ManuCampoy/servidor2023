<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php
				
                //Dada la cadena "En un lugar de la Mancha de cuyo nombre"
                //Muestra la cadena al revés.
                
                $cadena = "En un lugar de la Mancha de cuyo nombre";

                echo $cadena."<br>";
                for($i=strlen($cadena)-1;$i>=0;$i--){

                    echo $cadena[$i]."";
                    
                }

			?>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>