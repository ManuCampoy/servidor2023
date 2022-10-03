<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
		<h2 class="text-center pb-2 border-bottom">TEMA 1 - EJERCICIO 5</h2>
			<div class="p-4 m-2">
				<?php

                    $numero = rand(0,99); 
                    echo "<b> Escribir con letras el número ".$numero."</b><br>";

                    $decena =  floor($numero/10);
                    $unidad = ($numero%10)/1;

                    if($unidad==0){

                        $u="CERO";

                    }else if($unidad==1){

                        $u="UNO";

                    }else if($unidad==2){

                        $u="DOS";

                    }else if($unidad==3){

                        $u= "TRES";

                    }else if($unidad==4){

                        $u="CUATRO";

                    }else if($unidad==5){

                        $u="CINCO";

                    }else if($unidad==6){

                        $u="SEIS";

                    }else if($unidad==7){

                        $u="SIETE";

                    }else if($unidad==8){

                        $u="OCHO";

                    }else if($unidad==9){

                        $u="NUEVE";

                    }else if($unidad==10){

                        $u="DIEZ";

                    }
                    
                    
                    if($decena==1){

                        switch($unidad){

                            case 1:
                                $b =  "ONCE";
                                break;
                            case 2:
                                $b =  "DOCE";
                                break;
                            case 3:
                                $b =  "TRECE";
                                break;
                            case 4:
                                $b =  "CATORCE";
                                break;
                            case 5:
                                $b =  "QUINCE";
                                break;
                            case 6:
                                $b =  "DIECISÉIS";
                                break;
                            case 7:
                                $b =  "DIECISIETE";
                                break;
                            case 8:
                                $b =  "DIECIOCHO";
                                break;
                            case 9:
                                $b =  "DIECINUEVE";
                                break;

                        }


                    }else if($decena==2){

                        $d = "VEINTI";

                    }else if($decena==3){

                        $d = "TREINTA";

                    }else if($decena==4){

                        $d = "CUARENTA";

                    }else if($decena==5){

                        $d = "CINCUENTA";

                    }else if($decena==6){

                        $d = "SESENTA";

                    }else if($decena==7){

                        $d = "SETENTA";

                    }else if($decena==8){

                        $d = "OCHENTA";

                    }else if($decena==9){

                        $d = "NOVENTA";

                    }

                    
                    if ($numero<=10){

                        echo "Se escribe <b>".$u."</b";

                    }else if($unidad==0){
                        
                        echo "Se escribe <b>".$d."</b";


                    }else if(($numero>=10)&&($numero<20)){

                        echo "Se escribe <b>".$b."</b";

                    }else if(($numero>=20)&&($numero<30)){

                        echo "Se escribe <b>".$d.$u."</b>"; 

                    }else if(($numero>=30)&&($numero<40)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>";  

                    }else if(($numero>=40)&&($numero<50)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }else if(($numero>=50)&&($numero<60)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }else if(($numero>=60)&&($numero<70)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }else if(($numero>=70)&&($numero<80)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }else if(($numero>=80)&&($numero<90)){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }else if($numero>=90){

                        echo "Se escribe <b>".$d." Y ".$u."</b>"; 

                    }
				?>
			</div>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
