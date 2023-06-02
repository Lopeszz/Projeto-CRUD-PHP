<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Fornecedores</title>
</head>

<body>
    <h1>Listagem de Fornecedores</h1>
    <table border="1">
        <tr>
            <th>id_fornecedor</th>
            <th>nome</th>
            <th>cnpj</th>
            <th>email</th>
            <th>usuario</th>
            <th>senha</th>
            <th>celular</th>
            <th>cep</th>
            <th>rua</th>
            <th>numero</th>
            <th>complemento</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>estado</th>
            <th>Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

        require_once BASE . '/Model/Fornecedor.php';
        require_once BASE . '/Database/DAOFornecedor.php';
        require_once BASE . '/Database/Conexao.php';

        $daoFornecedor = new DAOFornecedor();
        $listaFornecedores = $daoFornecedor->listaTodos();

        foreach ($listaFornecedores as $fornecedor) {
            echo '<tr>';
            echo '<td>' . $fornecedor['id_fornecedor'] . '</td>';
            echo '<td>' . $fornecedor['nome'] . '</td>';
            echo '<td>' . $fornecedor['cnpj'] . '</td>';
            echo '<td>' . $fornecedor['email'] . '</td>';
            echo '<td>' . $fornecedor['usuario'] . '</td>';
            echo '<td>' . $fornecedor['senha'] . '</td>';
            echo '<td>' . $fornecedor['celular'] . '</td>';
            echo '<td>' . $fornecedor['cep'] . '</td>';
            echo '<td>' . $fornecedor['rua'] . '</td>';
            echo '<td>' . $fornecedor['numero'] . '</td>';
            echo '<td>' . $fornecedor['complemento'] . '</td>';
            echo '<td>' . $fornecedor['bairro'] . '</td>';
            echo '<td>' . $fornecedor['cidade'] . '</td>';
            echo '<td>' . $fornecedor['estado'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $fornecedor['id_fornecedor'] ?>">
                    <button type="submit">Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" value="<?= $fornecedor['id_fornecedor'] ?>">
                    <input type="hidden" name="nome" value="<?= $fornecedor['nome'] ?>">
                    <input type="hidden" name="cnpj" value="<?= $fornecedor['cnpj'] ?>">
                    <input type="hidden" name="email" value="<?= $fornecedor['email'] ?>">
                    <input type="hidden" name="usuario" value="<?= $fornecedor['usuario'] ?>">
                    <input type="hidden" name="senha" value="<?= $fornecedor['senha'] ?>">
                    <input type="hidden" name="celular" value="<?= $fornecedor['celular'] ?>">
                    <input type="hidden" name="cep" value="<?= $fornecedor['cep'] ?>">
                    <input type="hidden" name="rua" value="<?= $fornecedor['rua'] ?>">
                    <input type="hidden" name="numero" value="<?= $fornecedor['numero'] ?>">
                    <input type="hidden" name="complemento" value="<?= $fornecedor['complemento'] ?>">
                    <input type="hidden" name="bairro" value="<?= $fornecedor['bairro'] ?>">
                    <input type="hidden" name="cidade" value="<?= $fornecedor['cidade'] ?>">
                    <input type="hidden" name="estado" value="<?= $fornecedor['estado'] ?>">
                    <button type="submit">Editar</button>
                </form>
            </td>
            <?php
            echo '<tr>';
        }
        ?>
    </table>
</body>

</html>
