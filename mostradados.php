<?php

require_once 'Cliente.php';

$conta = $_GET['id'];
require_once 'dados.php';
?>

<?php
echo $clientes[$conta]->MostraCliente();
?>


