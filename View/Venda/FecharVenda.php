<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
</head>

<body>
    <h1>Cadastro de Venda</h1>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

    require_once BASE . '/Model/Venda.php';
    require_once BASE . '/Database/DAOVenda.php';
    require_once BASE . '/Database/Conexao.php';

    session_start();
    $idvenda = $_SESSION['vendaaberta'];
    $total_venda = $_POST['total_venda'];
    $obs = $_POST['obs'];
    $id_metodoPagamento = $_POST['id_metodoPagamento'];
    $daoVenda = new DaoVenda();

    if ($idDaVenda = $daoVenda->fecharVenda($idvenda, $total_venda, $obs, $id_metodoPagamento)) {
        unset($_SESSION['vendaaberta']);
        header("location: Lista.php");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>

</html>