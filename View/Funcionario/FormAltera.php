<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
require_once BASE . '/View/Login/CheckLogin.php';
require_once BASE . '/View\Header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>
    <link rel="stylesheet" href=".\..\..\Css\style.css">

</head>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$salario = $_POST['salario'];
$celular = $_POST['celular'];
$nivel_acesso = $_POST['nivel_acesso'];
?>

<body>
    <h1>Editar Funcionario</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="cpf">cpf:</label>
        <input type="text" name="cpf" id="cpf" value="<?= $cpf ?>">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?= $email ?>">
        <br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?= $usuario ?>">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?= $senha ?>">
        <br>

        <label for="salario">Salario:</label>
        <input type="text" name="salario" id="salario" value="<?= $salario ?>">
        <br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular" value="<?= $celular ?>">
        <br>
        <label for="nivel_acesso">Nível de Acesso:</label>
        <select name="nivel_acesso" id="nivel_acesso">
            <option <?= ($nivel_acesso == '0' ? 'selected' : '') ?> value="0">Usuário</option>
            <option <?= ($nivel_acesso == '1' ? 'selected' : '') ?> value="1">Administrador</option>
        </select>
        <br>
        <button type="buttom">Salvar</button>
    </form>
</body>

</html>