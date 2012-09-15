<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 1</title>
</head>
<body>
	<?php 
		//variáveis inteiras

			$idade = 30;
			$peso = 52e3;

			//echo $idade; //mostrando

		//variáveis string
			$nome = 'Klayton'; // com aspas simples
			$sobrenome = "Oliveira"; //com aspas duplas

			//formas de concatenação
			$frase = "Dilma disse: Brasil vai \"melhorar\", será " . $nome . " " . $sobrenome . "!";
			$frase2 = 'Dilma disse: Brasil vai "melhorar", será $nome $sobrenome !';

			//echo $frase2; //mostrando
			//echo $nome .= $sobrenome; // $nome fica com o valor KlaytonOliveira

		//variáveis array

			$meuArray["instituicao1"] = "Universo";
			$meuArray["instituicao2"] = "Marista";

			//var_dump($meuArray); //mostrando
		
		//conversão de =dados

			$peso1 = 2.750;
			$peso2 = 3;

			$pesoTotal = (integer) $peso1 + $peso2;

			$pesoTotal += 1; //$pesoTotal = $pesoTotal + 1

			//var_dump($pesoTotal); //mostrando

		//Operadores
			$valor = 10;
			/*
			+ Adição
				*/ //echo  $valor + 10; // mostra 20 
			/*
			- Subtração
				*/ //echo  $valor - 10; // mostra 0
			/*
			* Multiplicação
				echo  $valor * 10; //  mostra 100
			/ Divisão
				echo  $valor / 10; //  mostra 1
			% Módulo
				echo  $valor % 10; // mostra 0
			. Concatenação
				echo "texto1" + "texto2"; // mostra "texto1texto2"
			= Atribuição simples
				echo $valor = 20;
			+= Atribuição adição*/
				//echo  $valor += 10; // $valor = $valor + 10;  mostra 20
				/*
			-= Atribuição subtração
				echo  $valor -= 10; // $valor = $valor - 10;  mostra 0
			*= Atribuição multiplicação
				echo  $valor *= 10; // $valor = $valor * 10;  mostra 100
			/= Atribuição divisão
				echo  $valor /= 10; // $valor = $valor / 10;  mostra 1
			%= Atribuição modulo
				echo  $valor %= 10; // $valor = $valor % 10;  mostra 0
			.= Atribuição concatenação
				echo  $valor .= 10; // $valor = $valor . 10;  mostra "1010"

			*/

		//Operadores Lógicos
				if ($valor == 10 or $nome == "Klayton") {
					// faz se valor = 10
				} else {
					// faz se valor diferente de 10
				}
				
				$valor = 10;
				$valor++; // 10 + 1 = 11
				$valor--; //10 - 1 = 9

				$paginaAtual = 1;
				$paginaAnterior = 0;
				$proximaPagina = 2;

				$paginaAnterior = $paginaAtual++;
				$proximaPagina = $paginaAtual + 1;

				echo "PAGINAÇÃO: paginaAtual: $paginaAtual - paginaAnterior: $paginaAnterior - proximaPagina: $proximaPagina";






	?>
</body>
</html>
