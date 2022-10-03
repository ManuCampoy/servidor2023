<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO </h2>
			<div class="p-4 m-2">
				<?php

                    function convierteClientes($nombres,$opcion){

                        if(strtolower($opcion)==="l"){
 
                            $minus = strtolower($nombres); 
                            echo $minus."<br>";
 
                        }else if(strtolower($opcion)=="u"){
 
                            $mayus = strtoupper($nombres); 
                            echo $mayus."<br>";
 
                        }else if(strtolower($opcion)=="m"){
 
                            $capital = ucfirst($nombres); 
                            echo $capital."<br>";
 
                        }
 

                    }

                    $empresas = ["Consentino","Garciden","Deretil","Makito","Globomatik"];
                    
                    echo "<b>Todo el nombre en minúscula: </b>";
                    convierteClientes($empresas[0],"L");
                    
                    echo "<b>Todo el nombre en mayúscula: </b>";
                    convierteClientes($empresas[2],"u");
                    
                    echo "<b>La primera letra en mayúscula: </b>";
                    convierteClientes($empresas[1],"m");
                    
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
