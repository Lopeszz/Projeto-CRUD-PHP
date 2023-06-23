<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Novo</h1>
    <form action="AbrirVenda.php" method="post">

        <label for="cliente">Cliente:</label>
        <select name="cliente" id="cliente">
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

        <button type="submit">Abrir Venda</button>

    </form>

</body>

</html>