<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 2 - EJERCICIO 2</h2>
			<div class="p-4 m-2">
				<?php
    
                    $direccionIp = "192.168.11.200";

                    $dirrecionIpSeparada = explode(".",$direccionIp);

                    echo "<b> La dirección IP es </b>".$direccionIp."<br>";
                    echo "<b> La direccion IP separada quedaría de esta manera:</b>";
                    foreach ($dirrecionIpSeparada as $valor) {
                        
                        echo $valor." ";

                    }
                    
                    echo "<br>";
                    $ipConDosPuntos = implode(":",$dirrecionIpSeparada);
                    echo "<b> La dirección IP con nuevo delimitador quedaría de esta
                                manera </b>".$ipConDosPuntos."<br>"; 
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
