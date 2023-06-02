<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Funcionario.php';
require_once BASE . '/Database/DAOFuncionario.php';
require_once BASE . '/Database/Conexao.php';

$daoFuncionario = new DAOFuncionario();
$id = $_POST['id'];

if ($daoFuncionario->exclui($id)) {
    header('Location: http://localhost/macaco/View/Funcionario/Lista.php');
} else {
    echo 'Erro ao excluir funcionario.';
}
?>
    