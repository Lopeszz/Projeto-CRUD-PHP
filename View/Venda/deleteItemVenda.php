<?php
require_once '../../database/Conexao.php';
require_once '../../database/DaoItemVenda.php';

$daoItemVenda = new DAOItemVenda();
$id = $_POST['id'];

if ($daoItemVenda->exclui($id)) {
    header('Location: FormCadastroItemVenda.php');
} else {
    echo 'Erro ao excluir Venda.';
}
?>