<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

require_once BASE . '/Model/Produto.php';
require_once BASE . '/Database/DAOProduto.php';
require_once BASE . '/Database/Conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$qtd_estoque = $_POST['qtd_estoque'];
$fornecedor_id = $_POST['fornecedor_id'];

$produto = new Produto($nome, $descricao, $preco, 
$qtd_estoque, $fornecedor_id);
$daoProduto = new DAOProduto();

if ($daoProduto->altera($produto)) {
    echo 'Atualizando';
    header('Location: 
    http://localhost/macaco/View/Produto/Lista.php');
} else {
    echo 'NÃO atualizando.';
}
?>
>