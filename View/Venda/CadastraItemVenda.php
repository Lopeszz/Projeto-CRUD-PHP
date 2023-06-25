<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens</title>
</head>

<body>
    <h1>Cadastro de Itens</h1>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');

    require_once BASE . '/Model/ItemVenda.php';
    require_once BASE . '/Database/DAOItemVenda.php';
    require_once BASE . '/Database/Conexao.php';

    session_start();

    $idVenda = $_SESSION['vendaaberta'];
    $produto_id = $_POST['produto_id'];
    $qtd = $_POST['qtd'];
    $subtotal = $_POST['subtotal'];

    $itemVenda = new ItemVenda(null, $idVenda, $produto_id, $qtd, $subtotal);

    $daoItemVenda = new DaoItemVenda();

    if ($daoItemVenda->inclui($itemVenda)) {
        header("location: formCadastroItemVenda.php");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>

</html>