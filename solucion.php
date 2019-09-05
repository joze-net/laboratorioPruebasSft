<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
$categoria=$_GET['categoria'];
$horasTrabajadas=$_GET['horas'];
$horaNormal=0;
$horasExtras=0;
$tarifaExtra=0;
$salario=0;
$tarifa=0;

switch ($categoria) {//segun la categoria establecemos la tarifa
	case 1:
		if ($horasTrabajadas>0) {//las horas deben ser mayor que cero

			
				$tarifa=12000;
     			echo "tarifa de hora 12000";
			
		
				$tarifaExtra=$tarifa+(12000*0.25);
				echo " se incrementa un 25%" ;
			}else{
			echo "numero de horas no permitido";
		}
		break;

	case 2:
	    if ($horasTrabajadas>0) {

			
				$tarifa=17000;
				echo "tarifa de hora 17000";
			
	
			
				$tarifaExtra=$tarifa+(17000*0.25);
				echo " se incrementa un 25%" ;
			}else{
			echo "numero de horas no permitido";
		}
		
		break;

	case 3:
		if ($horasTrabajadas>0) {

		
				$tarifa=22000;
				echo "tarifa de hora 22000";
			
			
				$tarifaExtra=$tarifa+(22000*0.25);
				echo " se incrementa un 25%" ;
			}else{
			echo "numero de horas no permitido";
		}
		break;
	
	default:
		echo "string";
		break;
}//----------------------------------------------------------------------------------------------------------------------------------------

if ($horasTrabajadas>0 ) {
    
    if ($horasTrabajadas<41) {
    	$horaNormal=$horasTrabajadas;
    }
    if($horasTrabajadas>40){
    	for ($i=40; $i < $horasTrabajadas ; $i++) { 
    		$horasExtras++;
    		$horaNormal=40;
    	}
    }
	
}
echo "<h1>$horasTrabajadas $horaNormal   $horasExtras</h1>";
if ($horasTrabajadas>0) {
	if ($horasTrabajadas<41) {
		$salario=$horaNormal*$tarifa;
	}else{
		$salario=($horaNormal*$tarifa)+($horasExtras*$tarifaExtra);
	}
	echo "<h1>$horasTrabajadas $horaNormal   $horasExtras $tarifa $tarifaExtra</h1>";
	

	echo "<h3>su categoria es $categoria y su numero de horas es $horasTrabajadas, le corresponde un salario de $salario</h3><br>";


	echo "<table> <tr><td >Categoria: </td><td colspan='3'>$categoria</td></tr>"
	."            <tr> <td>Tarifa hora normal: <td>$tarifa</td> "
	."             <td>Tarifa hora extra :<td>$tarifaExtra</td> </tr>"
	."            <tr><td>Horas normales trabajadas: </td><td>$horaNormal</td>"
	."                <td>Valor: </td><td>".$tarifa*$horaNormal."</td><tr>"
	."            <tr><td>Horas extras trabajadas:   </td><td>$horasExtras</td>"
	."                <td>Valor: </td><td>".$tarifaExtra*$horasExtras."</td></tr>"
	."            <tr><td >Total horas trabajadas: </td><td colspan='3'>$horasTrabajadas</td></tr>"
	."            <tr><td >Salario: </td><td colspan='3'>$salario</td></tr> </table>";
}




 ?>
</body>
</html>



