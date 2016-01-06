<?php

	class Cliente
	{
       public $nome;
       public $cnpj;
       public $endereco;
       public $cep;
       public $celular;
       public $email;

       public function __construct($nome, $cnpj, $endereco, $cep, $celular, $email)
       {
       	$this ->nome     = $nome;
       	$this ->cnpj     = $cnpj;
       	$this ->endereco = $endereco;
       	$this ->cep      = $cep;
       	$this ->celular  = $celular; 
       	$this ->email    = $email;
       }
       


       public function ChamaCliente($id)
       {
       		
       		echo '<tr><td><a href="mostradados.php/?id='.$id.'">'.$this->nome.'</a></td></tr>';
       		
       }
       public function MostraCliente()
       {
       		echo 'Nome: '.$this->nome.'<br/>';
       		echo 'cnpj : '.$this->cnpj.'<br/>';
       		echo 'endereco : '.$this->endereco.'<br/>';
       		echo 'cep : '.$this->cep.'<br/>';
       		echo 'celular : '.$this->celular.'<br/>';
       		echo 'email : '.$this->email.'<br/>';
       		echo '<hr/>';
       }
	}
?>