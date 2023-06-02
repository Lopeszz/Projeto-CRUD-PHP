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

    require_once BASE . '/Model/Funcionario.php';
    require_once BASE . '/Database/DAOFuncionario.php';
    require_once BASE . '/Database/Conexao.php';

    if (isset($_POST['nome'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $salario = $_POST['salario'];
        $celular = $_POST['celular'];
        $nivel_acesso = $_POST['nivel_acesso'];

        $senha = password_hash($senha, PASSWORD_DEFAULT);


        $Funcionario = new Funcionario($nome, $cpf, $email, $usuario, 
        $senha, $salario, $celular, $nivel_acesso);
        $daoFuncionario = new DAOFuncionario();

        if ($daoFuncionario->inclui($Funcionario)) {
            echo 'Salvo';
        } else {
            echo 'Not save.';
        }
    } else {
        echo 'Sai daqui otário';
    }

    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" 
    style="text-decoration:none">Listar Funcionarios</a></button>

</body>

</html>