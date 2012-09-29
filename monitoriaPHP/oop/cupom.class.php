<?php 

header("Content-type: text/html; charset:utf-8");
/**
*  Classse que representa um cupom fiscal
*/
class Cupom {
	
	var $codigo;
	var $cnpj;
	var $nomeEmpresa;
	var $dataHora;
	var $valorTotal;
	var $itens = array();

	function __construct(){
		$this->codigo = 0;
		$this->cnpj = "12345678901234";
		$this->nomeEmpresa = "BOMPREÇO";
		$this->dataHora = date("d/m/y H:i:s");
		$this->valorTotal = 0;
	}

	function abrir (){
		echo $this->nomeEmpresa . "<br>";
		echo "CNPJ: " . $this->cnpj . "<br>";
		echo "Data e Hora: " . $this->dataHora . "<br>";
		echo "------------------------------------------<br>";

	}

	function incluirItem(){}

	function imprimirItem($item){	}

	function cancelarItem(){}

	function fecharCupom(){}

}


$meuCupom = new Cupom();

$meuCupom->abrir();
 ?>