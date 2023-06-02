<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Cliente.php';
require_once BASE . '/Database/DAOCliente.php';
require_once BASE . '/Database/Conexao.php';

$daoCliente = new DAOCliente();
$id = $_POST['id'];

if ($daoCliente->exclui($id)) {
    header('Location: http://localhost/macaco/View/Cliente/Lista.php');
} else {
    echo 'NOT deletadooo.';
}

?>