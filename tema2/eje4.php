<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 2 - EJERCICIO 4</h2>
			<div class="p-4 m-2">
				<?php

                    function encriptar($mensaje,$clave){

                        $mensajeIncriptado = "";
                        $mensajeSeparado = str_split($mensaje,1);

                        foreach($mensajeSeparado as $valor){
    
                            $valorASCII = (ord($valor)+$clave);
                            $mensajeIncriptado .= chr($valorASCII); 
                            
                        }

                        return $mensajeIncriptado;

                    }  
                    function desencriptar($mensaje,$clave){
 
                        $mensajeIncriptado = str_split($mensaje,1);

                        foreach($mensajeIncriptado as $valor){
    
                            $valorASCII = (ord($valor)-$clave);
                            echo chr($valorASCII); 
    
                        }

                    } 
                   $mensaje = "hola y adios";
                    $clave = 2;
                    echo "<b>El mensaje a encriptar es: </b>".$mensaje."<br>";
                    echo "<b>El mensaje encriptado sería: </b>";
                    echo encriptar($mensaje,$clave)."<br>";

                    $incriptado = encriptar($mensaje,$clave);
                    echo "<b>El mensaje desencriptado sería: </b>"; 
                    echo desencriptar($incriptado,$clave);

				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
