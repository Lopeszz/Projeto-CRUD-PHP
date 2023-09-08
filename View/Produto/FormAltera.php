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
$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];
$fornecedor_id = $_POST['fornecedor_id'];
?>

<body>
    <h1>Editar Funcionario</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id_produto" id="id_produto" value="<?= $id_produto ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="descricao" value="<?= $descricao ?>">
        <br>

        <label for="preco">Preco:</label>
        <input type="text" name="preco" id="preco" value="<?= $preco ?>">
        <br>

        <label for="qtd">qtd:</label>
        <input type="text" name="qtd" id="qtd" value="<?= $qtd ?>">
        <br>

        <label for="fornecedor_id">Fornecedor:</label>
        <select name="fornecedor_id" id="fornecedor_id">
            <option value="null"></option>

            <?php

            require_once BASE . '/Model/Fornecedor.php';
            require_once BASE . '/Database/DAOFornecedor.php';
            require_once BASE . '/Database/Conexao.php';

            $daoConexao = new DAOFornecedor();
            $lista = $daoConexao->listaTodos();


            foreach ($lista as $fornecedor) {
                $idFornecedordaLista = $fornecedor['id_fornecedor'];
                $nome = $fornecedor['nome'];
                if ($fornecedor_id == $idFornecedordaLista) {
                    echo "<option value='$idFornecedordaLista' selected>$nome</option>";
                } else {
                    echo "<option value='$idFornecedordaLista'> $nome</option>";
                }

            }
            ?>
        </select>
        </br>

        <button type="buttom">Salvar</button>
    </form>
</body>

</html>