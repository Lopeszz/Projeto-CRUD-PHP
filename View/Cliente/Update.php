<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');

require_once BASE . '/Model/Cliente.php';
require_once BASE . '/Database/DAOCliente.php';
require_once BASE . '/Database/Conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
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
$nivel_acesso = $_POST['nivel_acesso'];
$id = $_POST['id'];

$Cliente = new Cliente($nome, $cpf, $email, $usuario, $senha, $celular, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $nivel_acesso, $id);
$daoCliente = new DAOCliente();

if ($daoCliente->altera($Cliente)) {
    echo 'Updaitando';
    header('Location: http://localhost/macaco/View/Cliente/Lista.php');
} else {
    echo 'NOT Updaitando.';
}
?>