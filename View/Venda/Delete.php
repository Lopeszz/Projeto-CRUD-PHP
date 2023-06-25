<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Venda.php';
require_once BASE . '/Database/DAOVenda.php';
require_once BASE . '/Database/Conexao.php';

$daoVenda = new DAOVenda();
$id = $_POST['id'];

if ($daoVenda->exclui($id)) {
    header('Location: http://localhost/macaco/View/Venda/Lista.php');
} else {
    echo 'Erro ao excluir Venda.';
}
?>