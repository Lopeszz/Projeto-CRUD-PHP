<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Produto.php';
require_once BASE . '/Database/DAOProduto.php';
require_once BASE . '/Database/Conexao.php';

$daoProduto = new DAOProduto();
$id = $_POST['id'];

if ($daoProduto->exclui($id)) {
    header('Location: http://localhost/macaco/View/Produto/Lista.php');
} else {
    echo 'Erro ao excluir produto.';
}
?>

?>