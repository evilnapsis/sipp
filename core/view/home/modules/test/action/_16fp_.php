<h3 class='roboto'>Test 16FP</h3>
<p class='alert alert-warning'><b>Instrucciones:</b> Responde honestamente las siguientes preguntas bajo tus propios criterios, seleccionando una de las posibles respuestas</p>
<table class='table table-bordered'>

<?php 
$cnt=1;
foreach(X16FPQuestionData::getAll() as $question):?>
	<tr>
	<td><?php echo $cnt.".- ".$question->question; ?></td>
	<td>
<?php foreach(X16FPAnswerData::getAll() as $answer):?>
	<?php echo "<small style='font-size:12px;'><input  style='width:10px;' type='radio' name='$question->id' value='$answer->id'/>&nbsp;&nbsp;".$answer->name."</small><br>"; ?>

<?php endforeach; ?>
	</td>
	</tr>
<?php $cnt++; endforeach;?>
</table>
<br><br><br>