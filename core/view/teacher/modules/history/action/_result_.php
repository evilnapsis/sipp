<?php
$td = TestDoData::getById($_GET['id']);
$cir = ColorInterpretationResultData::getByTestDoId($td->id);
?>

<div class='f28 river'>Prueba de <?php echo $td->getTestData()->name?></div><br>
<div class='hero-unit'>
<?php
print "1.-".EColorInterpretationData::getByColorId($cir->color1)[0]->one_two."<br>"; 
print "2.-".EColorInterpretationData::getByColorId($cir->color2)[0]->one_two."<br>"; 
print "3.-".EColorInterpretationData::getByColorId($cir->color3)[0]->three_four."<br>"; 
print "4.-".EColorInterpretationData::getByColorId($cir->color4)[0]->three_four."<br>"; 
print "5.-".EColorInterpretationData::getByColorId($cir->color5)[0]->five_six."<br>"; 
print "6.-".EColorInterpretationData::getByColorId($cir->color6)[0]->five_six."<br>"; 
print "7.-".EColorInterpretationData::getByColorId($cir->color7)[0]->seven_eigth."<br>"; 
print "8.-".EColorInterpretationData::getByColorId($cir->color8)[0]->seven_eigth."<br>"; 
?>
</div>
<div class='f20'>Fecha de Aplicacion: <?php echo $td->created_at; ?></div>

