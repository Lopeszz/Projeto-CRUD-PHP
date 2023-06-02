<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

require_once BASE . '/Model/Funcionario.php';
require_once BASE . '/Database/DAOFuncionario.php';
require_once BASE . '/Database/Conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$salario = $_POST['salario'];
$celular = $_POST['celular'];
$nivel_acesso = $_POST['nivel_acesso'];
$id = $_POST['id'];

$funcionario = new Funcionario($nome, $cpf, $email, 
$usuario, $senha, $salario, $celular, $nivel_acesso, $id);
$daoFuncionario = new DAOFuncionario();

if ($daoFuncionario->altera($funcionario)) {
    echo 'Atualizando';
    header('Location: http://localhost/macaco/View/Funcionario/Lista.php');
} else {
    echo 'NÃO atualizando.';
}
?>
