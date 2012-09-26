<?php 
	header('Content-type:  text/plain; charset=utf-8');
	
//declaração das variaveis
	$nota1 = 7;
	$nota2 = 3;

//if ternário
	$status = (($nota1+$nota2)/2 >= 7) ? "aprovado" : "reprovado";

//if normal
	if (($nota1+$nota2)/2 >= 7) {
		$status = "aprovado";
	} else {
		$status = "reprovado";
	}

	echo 'resultado do if: ' . $status ;

//for

	$frutas = array('uva','pera', 'banana');
	for ($i= 0; $i < count($frutas); $i++) { 
		echo 'resultado do for: ' . $frutas[$i];
	}

	echo '< br>';

//foreach

	$frutas = array('uva','pera', 'banana');


	foreach ($frutas as $posicaoNoArray => $valorDaPosicaoNoArray) {
		echo 'resultado do foreach: ' . $frutas[$posicaoNoArray];
		
	}

//switch

	include '../calculadora/calcular.php';
	$tipo = 'somar';

	switch ($tipo) {
		case 'somar':
			somar($dadosDoFormulario["valor1"], $dadosDoFormulario["valor2"]);
			break;
		
		case 'subtrair':
			subtrair($dadosDoFormulario["valor1"], $dadosDoFormulario["valor2"]);
			break;

		case 'dividir':
			dividir($dadosDoFormulario["valor1"], $dadosDoFormulario["valor2"]);
			break;

		case 'multiplicar':
			multiplicar($dadosDoFormulario["valor1"], $dadosDoFormulario["valor2"]);
			break;

		default:
			echo 'Selecione uma operação!';
			break;
	}
 ?>