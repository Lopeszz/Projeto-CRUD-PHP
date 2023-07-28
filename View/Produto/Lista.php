<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>

<body>
    <h1>Listagem De Produtos</h1>
    <table border="1">
        <tr>
            <th>id_Produto</th>
            <th>nome</th>
            <th>descricao</th>
            <th>preco</th>
            <th>qtd</th>
            <th>fornecedor_id</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
        require_once BASE . '/Model/Produto.php';
        require_once BASE . '/Database/DAOProduto.php';
        require_once BASE . '/Database/Conexao.php';

        $daoConexao = new DAOProduto();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $produto) {
            echo '<tr>';
            echo '<td>' . $produto['id_produto'] . '</td>';
            echo '<td>' . $produto['nome'] . '</td>';
            echo '<td>' . $produto['descricao'] . '</td>';
            echo '<td>' . $produto['preco'] . '</td>';
            echo '<td>' . $produto['qtd'] . '</td>';
            echo '<td>' . $produto['fornecedor_id'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $produto['id_produto'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id_produto" id="id_produto" value="<?= $produto['id_produto'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $produto['nome'] ?>">
                    <input type="hidden" name="descricao" id="descricao" value="<?= $produto['descricao'] ?>">
                    <input type="hidden" name="preco" id="preco" value="<?= $produto['preco'] ?>">
                    <input type="hidden" name="qtd" id="qtd" value="<?= $produto['qtd'] ?>">
                    <input type="hidden" name="fornecedor_id" id="fornecedor_id" value="<?= $produto['fornecedor_id'] ?>">
                    <button>Editar</button>
                </form>
            </td>
            <?php
            echo '<tr>';
        }
        ?>
    </table>
</body>

</html>