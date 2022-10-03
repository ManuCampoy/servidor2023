
    <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		    <h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO </h2>
			    <div class="p-4 m-3">
                    <?php

                        function pintarCola($cola){

                            for($i=0;$i<count($cola);$i++){
                                echo $cola[$i]." ";

                            }

                            echo "<br>";
                        }

                        //Añadir a la cola pasandola por copia
                        function addCola($cola, $num, $elem){

                            for($i=0;$i<$num;$i++){

                                array_push($cola,$elem);//Añadimos los elementos al final del array

                            }

                            return $cola;
                        }

                        //Eliminar primer elemento que ha entrada.
                        function delCola(&$cola,$num){

                            for($i=0;$i<$num; $i++) {
                                array_shift($cola);
                            }

                        }

                        //Vaciar cola.
                        function vaciarColaR(&$cola) {
                            $cola = array();
                        }

                        $cola = array();
                        $cola = addCola($cola,3,1);
                        pintarCola($cola);
  
                        delCola($cola, 1);
                        pintarCola($cola);
        
                        vaciarColaR($cola);
                        pintarCola($cola);

                    ?>
		        </div>
	        </div>
	    </div>
    </div>
 
</body>
</html>
<?php
    include_once("../pie.php");
?>
