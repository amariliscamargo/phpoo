<?php
require_once 'header.php';
require_once 'Cliente.php';
require_once 'dados.php';
?>
<body>
<div class="container-fluid">
  <div class="row">
  	<div class="col-md-6 col-md-offset-3">
		
	    
		<h3> Tabela de Clientes</h3>
		<br/>
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

<!-- Default bootstrap modal example -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalhe do cliente</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php require_once 'footer.php'; ?>