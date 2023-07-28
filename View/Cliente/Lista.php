<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
</head>

<body>
    <h1>Listagem De Clientes</h1>
    <table border="1">
        <tr>
            <th>id_cliente</th>
            <th>nome</th>
            <th>cpf</th>
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
            <th>nivel_acesso</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');

        require_once BASE . '/Model/Cliente.php';
        require_once BASE . '/Database/DAOCliente.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOCliente();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['id_cliente'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>' . $registro['cpf'] . '</td>';
            echo '<td>' . $registro['email'] . '</td>';
            echo '<td>' . $registro['usuario'] . '</td>';
            echo '<td>' . $registro['senha'] . '</td>';
            echo '<td>' . $registro['celular'] . '</td>';
            echo '<td>' . $registro['cep'] . '</td>';
            echo '<td>' . $registro['rua'] . '</td>';
            echo '<td>' . $registro['numero'] . '</td>';
            echo '<td>' . $registro['complemento'] . '</td>';
            echo '<td>' . $registro['bairro'] . '</td>';
            echo '<td>' . $registro['cidade'] . '</td>';
            echo '<td>' . $registro['estado'] . '</td>';
            echo '<td>' . $registro['nivel_acesso'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['id_cliente'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['id_cliente'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
                    <input type="hidden" name="cpf" id="cpf" value="<?= $registro['cpf'] ?>">
                    <input type="hidden" name="email" id="email" value="<?= $registro['email'] ?>">
                    <input type="hidden" name="usuario" id="usuario" value="<?= $registro['usuario'] ?>">
                    <input type="hidden" name="senha" id="senha" value="<?= $registro['senha'] ?>">
                    <input type="hidden" name="celular" id="celular" value="<?= $registro['celular'] ?>">
                    <input type="hidden" name="cep" id="cep" value="<?= $registro['cep'] ?>">
                    <input type="hidden" name="rua" id="rua" value="<?= $registro['rua'] ?>">
                    <input type="hidden" name="numero" id="numero" value="<?= $registro['numero'] ?>">
                    <input type="hidden" name="complemento" id="complemento" value="<?= $registro['complemento'] ?>">
                    <input type="hidden" name="bairro" id="bairro" value="<?= $registro['bairro'] ?>">
                    <input type="hidden" name="cidade" id="cidade" value="<?= $registro['cidade'] ?>">
                    <input type="hidden" name="estado" id="estado" value="<?= $registro['estado'] ?>">
                    <input type="hidden" name="nivel_acesso" id="nivel_acesso" value="<?= $registro['nivel_acesso'] ?>">

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