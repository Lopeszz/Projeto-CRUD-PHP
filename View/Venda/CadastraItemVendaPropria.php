<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
require_once BASE . '/View/Login/CheckLogin.php';
require_once BASE . '/View\Header.php';

$id_produto = $_GET['id_produto'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechar Venda</title>
    <link rel="stylesheet" href=".\..\..\Css\style.css">

</head>

<body>
    <h1>Finalizar Pagamento</h1>
    <?php

    require_once BASE . '/Model/ItemVenda.php';
    require_once BASE . '/Database/DAOItemVenda.php';
    require_once BASE . '/Database/DAOProduto.php';
    require_once BASE . '/Database/Conexao.php';


    $idVenda = $_SESSION['vendaaberta'];
    $DAOProduto = new DAOProduto();
    $lista = $DAOProduto->obterProdutoPorId($id_produto);

    $itemVenda = new ItemVenda(null, $idVenda, $id_produto, 1, $lista['preco']);
    $daoItemVenda = new DaoItemVenda();
    $daoItemVenda->inclui($itemVenda);

    $total = $lista['preco'];

    ?>
</body>

</html>

<form action="FecharVenda.php" method="post">
    <input type="hidden" name="total_venda" id="total_venda" value="<?= $total ?>">

    <label for="id_metodoPagamento">Método de Pagamento:</label>
    <select name="id_metodoPagamento" id="id_metodoPagamento">
        <option value="null"></option>
        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
        require_once BASE . '/Model/MetodoPagamento.php';
        require_once BASE . '/Database/DAOMetodoPagamento.php';
        require_once BASE . '/Database/Conexao.php';

        $daoConexao = new DAOMetodoPagamento();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $MetodoPagamento) {
            $id = $MetodoPagamento['id_metodoPagamento'];
            $nome = $MetodoPagamento['nome'];
            echo "<option value='$id'>$nome
                    </option>";
        }
        ?>

    </select>

    <input type="hidden" name="obs" id="obs" value="VENDA FEITA PELO PRÓPRIO CONSUMIDOR">

    <br>
    <button>Fechar a venda</button>
</form>