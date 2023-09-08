<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
    <link rel="stylesheet" href=".\..\..\Css\style.css">

</head>

<body>
    <h1>Cadastro de Venda</h1>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

    require_once BASE . '/Model/Venda.php';
    require_once BASE . '/Database/Conexao.php';
    require_once BASE . '/Database/DAOVenda.php';
    require_once BASE . '/Database/DAOCliente.php';
    session_start();

    $dao = new daoCliente();
    $ida = $_SESSION['usuario'];
    $id_cliente = $dao->listaPorUsuario($ida); // Obtém o ID do funcionário
    $id_cliente = $id_cliente[0]['id_cliente'];

    $venda = new Venda(null, null, null, null, 0, null, $id_cliente, null); // Não é necessário fornecer o ID do cliente aqui
    
    $daoVenda = new DaoVenda();

    if ($idDaVenda = $daoVenda->abrirVenda($venda)) {
        $_SESSION['vendaaberta'] = $idDaVenda;
        $id_produto = $_POST['id'];
        header("Location: CadastraItemVendaPropria.php?id_produto=$id_produto");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>

</html>