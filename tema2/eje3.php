<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 2 - EJERCICIO 3</h2>
			<div class="p-4 m-2">
				<?php

                    $word_list_en = array("hello","bye","table","computer","bottle","water","electricity","connector","system","light",
                                    "floor","window","air","fan","door","blackboard","paper","backpack","notebook",
                                    "close","key","box","glass","screen","eraser","helmet","word","letter","folder",
                                    "link","server","keyboard","bug","developer","speaker","user","tool","card",
                                    "tab","desktop","download","message","tag","printer","status","memory","race",
                                    "light bulb","teacher","student");
                    $word_list_es = array("hola","adios","mesa","ordenador","botella","agua","electricidad","conector","sistema","luz",
                                    "sueconectorlo","ventana","aire","ventilador","puerta","pizarra","papel","mochila","libreta",
                                    "cierra","tecla","caja","cristal","pantalla","borrador","casco","palabra","carta","carpeta",
                                    "enlace","servidor","teclado","error","programador","altavoz","usuario","herramienta","tarjeta",
                                    "pestaña","escritorio","descargar","mensaje","etiqueta","impresora","estado","memoria","carrera",
                                    "bombilla","profesor","alumno");
                                    
                
				?>
                <form action='eje3.php' method='get'>
                    <b>Introduce una cadena a traducir:</b><br>
                    <input type='text' name='cadena'><br>
                    <input type='submit' value='Traducir'>
                    <input type='reset' value='Borrar'>
                </form>
                <?php
                    
                    $traduccion = [];
                    $cadena = $_GET['cadena'];
                    array_push($traduccion,$cadena);

                    foreach($word_list_es as $clave => $valor){
                        
                        if($cadena ===$valor){

                            foreach($word_list_en as $claveIngles => $valorIngles){

                                if($clave==$claveIngles){

                                    array_push($traduccion,$valorIngles);
                                    $traduccion = implode("-",$traduccion);
                                    
                                }

                            }
                            
                        }
                    }

                    echo $traduccion;
   
                ?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
