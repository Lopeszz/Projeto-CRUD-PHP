<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionarios</title>
</head>

<body>
    <h1>Listagem De Funcionarios</h1>
    <table border="1">
        <tr>
            <th>id_Funcionario</th>
            <th>nome</th>
            <th>cpf</th>
            <th>email</th>
            <th>usuario</th>
            <th>senha</th>
            <th>salario</th>
            <th>celular</th>
            <th>nivel_acesso</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');

        require_once BASE . '/Model/Funcionario.php';
        require_once BASE . '/Database/DAOFuncionario.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOFuncionario();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $funcionario) {
            echo '<tr>';
            echo '<td>' . $funcionario['id_funcionario'] . '</td>';
            echo '<td>' . $funcionario['nome'] . '</td>';
            echo '<td>' . $funcionario['cpf'] . '</td>';
            echo '<td>' . $funcionario['email'] . '</td>';
            echo '<td>' . $funcionario['usuario'] . '</td>';
            echo '<td>' . $funcionario['senha'] . '</td>';
            echo '<td>' . $funcionario['salario'] . '</td>';
            echo '<td>' . $funcionario['celular'] . '</td>';
            echo '<td>' . $funcionario['nivel_acesso'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $funcionario['id_funcionario'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
        
            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $funcionario['id_funcionario'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $funcionario['nome'] ?>">
                    <input type="hidden" name="cpf" id="cpf" value="<?= $funcionario['cpf'] ?>">
                    <input type="hidden" name="email" id="email" value="<?= $funcionario['email'] ?>">
                    <input type="hidden" name="usuario" id="usuario" value="<?= $funcionario['usuario'] ?>">
                    <input type="hidden" name="senha" id="senha" value="<?= $funcionario['senha'] ?>">
                    <input type="hidden" name="salario" id="salario" value="<?= $funcionario['salario'] ?>">
                    <input type="hidden" name="celular" id="celular" value="<?= $funcionario['celular'] ?>">
                    <input type="hidden" name="nivel_acesso" id="nivel_acesso" value="<?= $funcionario['nivel_acesso'] ?>">
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