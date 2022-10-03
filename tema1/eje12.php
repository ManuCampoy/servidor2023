<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 12</h2>
			<div class="p-4 m-2"> 
				<?php

                    $palabra="";
 
                    $diccionario = array(

                        "Enlace"=>"Link",
                        "Servidor"=>"Server",
                        "Teclado"=>"Keyboard",
                        "Error"=>"Bug",
                        "Programador"=>"Developer",
                        "Altavoz"=>"Speaker",
                        "Sistema"=>"System",
                        "Usuario"=>"User",
                        "Herramienta"=>"Tool",
                        "Impresora"=>"Printer",
                        "Tarjeta"=>"Card",
                        "Pestaña"=>"Tab",
                        "Escritorio"=>"Desktop",
                        "Descargar"=>"Download",
                        "Memoria"=>"Memory",
                        "Tecla"=>"Key",
                        "Contraseña"=>"Password",
                        "Mensaje"=>"Message",
                        "Pantalla"=>"Screen",
                        "Etiqueta"=>"Tag"

                    );

                    echo "<b>PALABRAS DISPONIBLES EN EL DICCIONARIO</b><br>";
                    foreach($diccionario as $español => $ingles){

                        echo $español." <<<< ";

                    }
                ?>
                <form action='eje12.php' method='get'>
                    <b>Introduce una palabra a traducir:</b><br>
                    <input type='text' name='palabra'><br>
                    <input type='submit' value='Traducir'>
                    <input type='reset' value='Borrar'>
                </form>
                <?php
                
                    $palabra = $_GET["palabra"];
                    foreach($diccionario as $español => $ingles){

                       if(strtolower($español)==$palabra){

                            echo "La tradución es: <br>";
                            echo $español." => ".$ingles;

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
