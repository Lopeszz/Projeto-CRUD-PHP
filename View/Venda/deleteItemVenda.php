<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Venda.php';
require_once BASE . '/Database/DAOItemVenda.php';
require_once BASE . '/Database/Conexao.php';

$daoItemVenda = new DAOItemVenda();
$id = $_POST['id'];

if ($daoItemVenda->exclui($id)) {
    header('Location: http://localhost/macaco/View/Venda/FormCadastroItemVenda.php');
} else {
    echo 'Erro ao excluir Venda.';
}
?>