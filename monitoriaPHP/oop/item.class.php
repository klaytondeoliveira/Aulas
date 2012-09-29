<?php 

include 'produto.class.php';

/**
* Classe que representa um item do meu Cupom
*/
class Item extends Produto{

	private $quantidade;
	private $valorTotal;
	private $cancelado;

	public function __construct($meuCodigo, $minhaDescricao, $meuPreco, $minhaQuantidade){
		/**
		* Para os atributos herdados, também podemos fazer a
		* atribuição chamando o método contrutor do pai.
		* Ex: parent::__construct($meuCodigo, $minhaDescricao, $meuPreco);
		*/

		//Atributos herdados da classe Produto.
		/*
		$this->codigo = $meuCodigo;
		$this->descricao = $minhaDescricao;
		$this->preco = $meuPreco;
		*/

		parent::__construct($meuCodigo, $minhaDescricao, $meuPreco);
		//Atributos da classe atual (Item)
		$this->quantidade =  $minhaQuantidade;
		$this->valorTotal =  $minhaQuantidade * $meuPreco;
		$this->cancelado =  "N";

	}

	
}

// Como criar um item -,
$item = new Item(1, "Tomate", "2.35", "2.765", "3.10");


echo $item->descricao;
//print_r($item);

 ?>