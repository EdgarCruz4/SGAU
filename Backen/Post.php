<?php 
	$a=array();
	$i=0;
	foreach($_POST as $campo => $valor)
 	{
 		$i++;
 		$a[$i]=$valor;
 		echo $i."-----".$campo."->".$a[$i]."<br>";
 	}
?>