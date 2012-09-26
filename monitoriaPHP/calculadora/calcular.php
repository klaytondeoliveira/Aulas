<?php 
//	var_dump($_GET);

$dadosDoFormulario = array('valor1' => 10, 'valor2' => 20, 'tipo' => '' );


if (isset($_GET['dados'])) {
	$dadosDoFormulario = $_GET['dados'];
	//call_user_func(function, argument_1, argument_2, argument_n)
	call_user_func($dadosDoFormulario["tipo"], $dadosDoFormulario["valor1"], $dadosDoFormulario["valor2"]);

}

function somar($a,$b){echo ' ' . ($a+$b);}
function subtrair($a,$b){echo ' ' . ($a-$b);}
function multiplicar($a,$b){echo ' ' . ( $a*$b);}
function dividir($a,$b){echo ' ' . ($a/$b);}


?>