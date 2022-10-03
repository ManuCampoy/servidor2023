<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Document</title>
</head>
<body>
      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 2 - EJERCICIO 7</h2>
			<div class="p-4 m-2"> 
                <div class="container">
                    
                    <?php

                        //Productos de una tienda.
                        $producto = array(

                            array("nombre" => "Pantalon running Adidas", "imagen"=>"img/padidas.jpg","precio"=> 50,
                                    "categoria"=>"pantalones running","descripcion" =>  "los mejores trotadores"),
                            array("nombre" => "Zapatillas Nike", "imagen"=>"img/nike.jpg","precio"=> 120,
                                    "categoria"=>"zapatillas","descripcion" =>  "las mejores para correr"),
                            array("nombre" => "Zapatillas Nike", "imagen"=>"img/nike.jpg","precio"=> 120,
                                    "categoria"=>"zapatillas","descripcion" =>  "las mejores para correr"),
                            array("nombre" => "Zapatillas Nike", "imagen"=>"img/nike.jpg","precio"=> 120,
                                    "categoria"=>"zapatillas","descripcion" =>  "las mejores para correr"),
                            array("nombre" => "Zapatillas Adidas", "imagen"=>"img/zadidas.jpg","precio"=> 170,
                                    "categoria"=>"zapatillas","descripcion" =>  "No están mal")

                        );

                        //Pintar productos
                        echo "<table class='table table-striped'>";
                        echo "<thead>";
                        echo " <tr>";
                        foreach(array_keys($producto[0]) as $valor){
                            echo "<td><b>". strtoupper($valor). "</b></td>";  
                        }
                        echo " </tr>";
                        echo "</thead>"; 
                        echo"<tbody>";

                        foreach($producto as $valor) {

                            echo "<tr>"; 
                                foreach($valor as $campo){
                                    
                                    echo "<td> ". $campo. " </td>"; 

                                }
                            echo "</tr>";


                        }
                        echo "</tbody>";
                        echo "</table>";
                    ?>
                </div>
			</div>
		</div>
	  </div>
    </div>

</body>
</html>

<?php
    include_once("../pie.php");
?>
