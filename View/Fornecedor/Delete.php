<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Fornecedor.php';
require_once BASE . '/Database/DAOFornecedor.php';
require_once BASE . '/Database/Conexao.php';

$daoFornecedor = new DAOFornecedor();
$id = $_POST['id'];

if ($daoFornecedor->exclui($id)) {
    header('Location: http://localhost/macaco/View/Fornecedor/Lista.php');
} else {
    echo 'Erro ao excluir fornecedor.';
}
?>
