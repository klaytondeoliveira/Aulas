<?php 

/**
*  Classe de produto
*/
class Produto{
	
	private $codigo;
	private $descricao;
	private $preco;

	public function __construct($meuCodigo, $minhaDescricao, $meuPreco){
		$this->codigo = $meuCodigo;
		$this->descricao = $minhaDescricao;
		$this->preco = $meuPreco;
	}

	public function getCodigo(){
		return $this->codigo;
	}
	
	public function setCodigo($meuCodigo){
		$this->codigo = $meuCodigo;
	}

	public function getDescricao(){
		return $this->descricao;
	}
	public function setDescricao($minhaDescricao){
		$this->descricao = $minhaDescricao;
	}

	public function getPreco(){
		return $this->preco;
	}
	public function setPreco($meuPreco){
		$this->preco = $meuPreco;
	}

	
}

/*
$leite = new Produto(10, "Leite Ninho 500g", 10.76);

echo $leite->getDescricao();


$leite->setDescricao("Café");

echo $leite->getDescricao();
*/
 ?>