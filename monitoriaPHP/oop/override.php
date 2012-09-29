<?php 

class Pessoa {
	public $nome;
	public $idade;

	public function andar (){
		echo "Anda";
	}
	
}

class Pai extends Pessoa{
	public function andar (){
		echo "Anda em pé";
	}
}

class Filho extends Pai{
	public function andar (){
		echo "Anda engatinhando";
		//parent::andar();
		
	}
}

$pessoa = new Pessoa();
$pai = new Pai();
$filho = new Filho();

//$pessoa->andar();//pai->andar();
$filho->andar();

 ?>