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
    <title>Cadastro</title>
    <link rel="stylesheet" href=".\..\..\Css\style.css">

</head>

<body>
    <h1>Novo</h1>
    <form action="Novo.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>

        <label for="salario">Salário:</label>
        <input type="text" name="salario" id="salario">
        <br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular">
        <br>

        <label for="nivel_acesso">Nível de Acesso:</label>
        <select name="nivel_acesso" id="nivel_acesso">
            <option value="1">Administrador</option>
            <option value="2">Funcionário</option>
        </select>
        <br>

        <button type="buttom">Cadastro</button>
        <button type="reset">Limpar</button>

    </form>

</body>

</html>