<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php

    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'macaco');

    require_once BASE . '/Model/Cliente.php';
    require_once BASE . '/Database/DAOcliente.php';
    require_once BASE . '/Database/Conexao.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['password'];

    $Cliente = new Cliente(null, null, null, $usuario, $senha, null, null, null, null, null, null, null, null, null);

    $daoCliente = new DAOCliente();

    $lista = $daoCliente->procuraUm($Cliente);

    if (count($lista) > 0 && password_verify($Cliente->getSenha(), $lista[0]['senha'])) {
        session_start();
        $_SESSION['usuario'] = $lista[0]['usuario'];
        header('Location: http://localhost/macaco/');
    } else {
        echo 'merda';
        header('Location: http://localhost/macaco/view/login/formlogin.php');
    }
    ?>

</body>

</html>