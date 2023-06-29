<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Venda</title>

</head>

<body>
    <div class="container">

        <h1>Itens da Venda</h1>

        <form action="cadastraItemVenda.php" method="post">

            <label for="produto_id">Produto</label><br>
            <select name="produto_id" id="produto_id">
                <?php
                define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

                require_once BASE . '/Model/Produto.php';
                require_once BASE . '/Database/DAOProduto.php';
                require_once BASE . '/Database/Conexao.php';

                $DAOProduto = new DAOProduto();
                $lista = $DAOProduto->listaTodos();
                foreach ($lista as $Produto) {
                    $nomeFornecedor = $DAOProduto->obterNomeFornecedor($Produto['fornecedor_id']);
                    echo '<option value="' . $Produto['id_produto'] . '">' . $Produto['nome'] . ' - ' . $nomeFornecedor . '</option>';
                }
                ?>
            </select><br>

            <label for="qtd">Quantidade</label><br>
            <input type="number" name="qtd" id="qtd"><br>
            <button>Adicionar</button>
        </form>


        <br><br>
        <table border="1">
            <tr>
                <th>id_itemvenda</th>
                <th>PRODUTO</th>
                <th>QUANTIDADE</th>
                <th>SUBTOTAL</th>
            </tr>
            <?php
            require_once BASE . '/Database/DAOItemVenda.php';
            require_once BASE . '/Database/Conexao.php';

            $DAOItemVenda = new DAOItemVenda();
            session_start();


            $lista = $DAOItemVenda->listaPorVenda($_SESSION['vendaaberta']);
            $total = 0;
            foreach ($lista as $registro) {
                $produtoId = $registro['produto_id'];

                $produto = $DAOProduto->obterProdutoPorId($produtoId);

                if ($produto !== null) {
                    $valorProduto = $produto['preco'];
                    $nomeProduto = $produto['nome'];

                    echo '<tr>';
                    echo '<td>' . $registro['id_itemvenda'] . '</td>';
                    echo '<td>' . $nomeProduto . '</td>';
                    echo '<td>' . $registro['qtd'] . '</td>';
                    $subtotal = $valorProduto * $registro['qtd'];
                    echo '<td>' . $subtotal . '</td>';

                    echo '</tr>';

                    $total += $subtotal;
                }
            }
            ?>
        </table>
        <br><br>

        <label>Total =
            <?= 'R$' . sprintf("%.2f", $total) ?>
            
        </label><br>

        <form action="FecharVenda.php" method="post">
            <input type="hidden" name="total_venda" id="total_venda" value="<?= $total ?>">
            <button>Fechar a venda</button>
        </form>
    </div>

</body>

</html>