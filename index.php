<?php
require_once 'header.php';
require_once 'Cliente.php';
?>
<body>
<div class="container-fluid">
  <div class="row">
  	<div class="col-md-6 col-md-offset-3">
		<?php 
		      
		$clientes = array(
		 	0 => new Cliente("Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA","06070-030","999-9999","teste@teste.com.br"),
		 	1 => new Cliente("Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA","06070-030","999-9999","teste@teste.com.br"),
		 	2 => new Cliente("Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA","06070-030","999-9999","teste@teste.com.br"),
		 	3 => new Cliente("João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG","06070-030","999-9999","teste@teste.com.br"),
		 	4 => new Cliente("Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA","06070-030","999-9999","teste@teste.com.br"),
		 	5 => new Cliente("Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG","06070-030","999-9999","teste@teste.com.br"),
		 	6 => new Cliente("Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA","06070-030","999-9999","teste@teste.com.br"),
		 	7 => new Cliente("Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA","06070-030","999-9999","teste@teste.com.br"),
		 	8 => new Cliente("Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA","06070-030","999-9999","teste@teste.com.br"),
		 	9 => new Cliente("Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA","06070-030","999-9999","teste@teste.com.br"),
		 	);  
            
            global $clientes;
                        
         ?>
	    
		<h2> Tabela de Clientes</h2>
		<table border='1' class="table">
		<th>Nome Completo -> <i>clique sobre o nome para ver os dados da pessoa<i><span style="float:right"><a href='index.php?inverte=true'><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
<a href='index.php?normal=true'><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></a></span></th>

		<?php

                  if (isset($_GET['inverte'])) {
                    $clientes = array_reverse($clientes);
                  }
                  if (isset($_GET['normal'])) {
                   ksort($clientes);
                  }

		$id = 0;
		foreach($clientes as $cliente){
		    
		    
		    echo $cliente->ChamaCliente($id);

		    $id ++;

		}
		?>
		</table>

        <html>

</html>
	</div>
  </div>
</div>
<?php require_once 'footer.php'; ?>