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
    <form action="AbrirVenda.php" method="post">
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            <option value="null"></option>
            <?php

            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
            require_once BASE . '/Model/Cliente.php';
            require_once BASE . '/Database/DAOCliente.php';
            require_once BASE . '/Database/Conexao.php';

            $daoConexao = new DAOCliente();
            $lista = $daoConexao->listaTodos();

            foreach ($lista as $Cliente) {
                $id = $Cliente['id_cliente'];
                $nome = $Cliente['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select>

        <br>
        <label for="id_funcionario">Funcionario:</label>
        <select name="id_funcionario" id="id_funcionario">
            <option value="null"></option>
            <?php

            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
            require_once BASE . '/Model/Funcionario.php';
            require_once BASE . '/Database/DAOFuncionario.php';
            require_once BASE . '/Database/Conexao.php';

            $daoConexao = new DAOFuncionario();
            $lista = $daoConexao->listaTodos();

            foreach ($lista as $Funcionario) {
                $id = $Funcionario['id_funcionario'];
                $nome = $Funcionario['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select>
        <br>

        <button type="submit">Abrir Venda</button>

    </form>

</body>

</html>