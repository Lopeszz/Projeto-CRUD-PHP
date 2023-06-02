<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>

<body>

    <h1>Novo</h1>

    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

    require_once BASE . '/Model/Cliente.php';
    require_once BASE . '/Database/DAOCliente.php';
    require_once BASE . '/Database/Conexao.php';

    if (isset($_POST['nome'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $nivel_acesso = $_POST['nivel_acesso'];

        $senha = password_hash($senha,PASSWORD_DEFAULT);

        $Cliente = new Cliente($nome, $cpf, $email, $usuario, $senha, $celular, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $nivel_acesso);
        $daoCliente = new DAOCliente();

        if ($daoCliente->inclui($Cliente)) {
            echo 'Salvo';
        } else {
            echo 'Not save.';
        }
    } else {
        echo 'Sai daqui otário';
    }

    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Clientes</a></button>

</body>

</html>