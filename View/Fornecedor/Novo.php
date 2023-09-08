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

    require_once BASE . '/Model/Fornecedor.php';
    require_once BASE . '/Database/DAOFornecedor.php';
    require_once BASE . '/Database/Conexao.php';

    if (isset($_POST['nome'])) {

        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
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

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $Fornecedor = new Fornecedor($nome, $cnpj, $email, $usuario, $senha, $celular, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado);
        $daoFornecedor = new DAOFornecedor();

        if ($daoFornecedor->inclui($Fornecedor)) {
            echo 'Salvo';
            header('Location: http://localhost/macaco/View/Fornecedor/Lista.php');
        } else {
            echo 'Not save.';
        }
    } else {
        echo 'Sai daqui otário';
    }

    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Fornecedors</a></button>

</body>

</html>