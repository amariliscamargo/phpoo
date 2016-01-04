<?php
	//Criando minha primeira classe
	class Pessoa 
	{
     	public $nome;
     	public $idade;

     	public function correr()
     	{
     		echo $this->nome.' correu';
     	}

	}
// Dois objetos baseados na mesma classe

    $pessoa1 = new Pessoa();
    $pessoa2 = new Pessoa();

    $pessoa1 -> nome  = "Amarilis";
    $pessoa1 -> idade =  40;

    $pessoa2 -> nome = "Maria";
    $pessoa2 -> idade= 27 ;

    echo $pessoa1 -> nome.'<br/>';
    echo $pessoa1 -> idade.'<br/>';

    //Executando o método

    echo $pessoa1 -> correr();
?>