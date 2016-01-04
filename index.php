<?php

require_once 'Pessoa.php';

// Dois objetos baseados na mesma classe

    $pessoa1 = new Pessoa('Amarilis','40');
    $pessoa2 = new Pessoa('vanderlei','20');

    //$pessoa1 -> nome  = "Amarilis";
    //$pessoa1 -> idade =  40;

   // $pessoa2 -> nome = "Maria";
   // $pessoa2 -> idade= 27 ;

   //echo $pessoa1 -> nome.'<br/>';
    //echo $pessoa1 -> idade.'<br/>';

    //Executando o método

    echo $pessoa2 -> correr(100);

require_once 'Produto.php';

?>