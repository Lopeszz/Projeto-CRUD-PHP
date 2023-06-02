<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');

require_once BASE . '/Model/Fornecedor.php';
require_once BASE . '/Database/DAOFornecedor.php';
require_once BASE . '/Database/Conexao.php';

$daoFornecedor = new DAOFornecedor();

$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$fornecedor = new Fornecedor($nome, $cnpj, $email, $usuario, $senha, $celular, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $id);

// Atualize o fornecedor no banco de dados
if ($daoFornecedor->altera($fornecedor)) {
    header('Location: http://localhost/macaco/View/Fornecedor/Lista.php');
} else {
    echo 'Erro ao atualizar fornecedor.';
}
?>
