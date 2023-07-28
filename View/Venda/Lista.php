<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Vendas</title>
</head>

<body>
    <h1>Listagem de Vendas</h1>
    <table border="1">
        <tr>
            <th>Id_venda</th>
            <th>Situacao</th>
            <th>Observacoes</th>
            <th>Data_venda</th>
            <th>Total_venda</th>
            <th>Funcionario_id</th>
            <th>Cliente_id</th>
            <th>MetodoPagamento_id</th>
            <th>Ação</th>
        </tr>
        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

        require_once BASE . '/Model/Venda.php';
        require_once BASE . '/Database/DAOVenda.php';
        require_once BASE . '/Database/Conexao.php';

        $daoVenda = new DaoVenda();
        $lista = $daoVenda->listaTodos();

        foreach ($lista as $venda) {
            echo '<tr>';
            echo '<td>' . $venda['id_venda'] . '</td>';
            echo '<td>' . $venda['situacao'] . '</td>';
            echo '<td>' . $venda['observacoes'] . '</td>';
            echo '<td>' . $venda['data_venda'] . '</td>';
            echo '<td>' . $venda['total_venda'] . '</td>';
            echo '<td>' . $venda['funcionario_id'] . '</td>';
            echo '<td>' . $venda['cliente_id'] . '</td>';
            echo '<td>' . $venda['metodoPagamento_id'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $venda['id_venda'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>