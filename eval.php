<?php


if(isset($_GET['reference'])){
	include "core/bootstrap.inc";
	$reference = $_GET['reference'];
	session_start();
	if($reference=="8colors"){
		$c[0] = null;
		$c[1] = $_GET['c1'];
		$c[2] = $_GET['c2'];
		$c[3] = $_GET['c3'];
		$c[4] = $_GET['c4'];
		$c[5] = $_GET['c5'];
		$c[6] = $_GET['c6'];
		$c[7] = $_GET['c7'];
		$c[8] = $_GET['c8'];
		echo "<div class='alert alert-info'>Los resultados de la prueba son los siguientes: </div>";
		echo "<div class='hero-unit'>";
		$colors = "";
		for($i=1;$i<=8;$i++){
			//echo $c[$i];
			$colors[$i-1] = ColorData::getByName($c[$i])->id;
			if($i==1||$i==2){
				$ci = ColorData::getByName($c[$i]);
				print "$i.-".EColorInterpretationData::getByColorId($ci->id)[0]->one_two."<br>"; 
			}
			if($i==3||$i==4){
				$ci = ColorData::getByName($c[$i]);
				print "$i.-".EColorInterpretationData::getByColorId($ci->id)[0]->three_four."<br>"; 
			}
			if($i==5||$i==6){
				$ci = ColorData::getByName($c[$i]);
				print "$i.-".EColorInterpretationData::getByColorId($ci->id)[0]->five_six."<br>"; 
			}
			if($i==7||$i==8){
				$ci = ColorData::getByName($c[$i]);
				print "$i.-".EColorInterpretationData::getByColorId($ci->id)[0]->seven_eigth."<br>"; 
			}
		}
			print "<br><p class='alert alert-warning'>";
			print "has completado la prueba con exito,los resultados de las pruebas se guardaran en <a href='home.php?module=history'>El historial de pruebas</a>";
			print "</p>";
		$td = new TestDoData();
		$td->test_id = 1;
		$ti = $td->add();
		$cir = new ColorInterpretationResultData();
		$cir->testdo_id = $ti[1];
		$cir->color1 = $colors[0];
		$cir->color2 = $colors[1];
		$cir->color3 = $colors[2];
		$cir->color4 = $colors[3];
		$cir->color5 = $colors[4];
		$cir->color6 = $colors[5];
		$cir->color7 = $colors[6];
		$cir->color8 = $colors[7];
		$cir->add();


	}
}else{
	print "No reference";
}


?>