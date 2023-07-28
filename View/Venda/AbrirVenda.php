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
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');

    require_once BASE . '/Model/Venda.php';
    require_once BASE . '/Database/DAOVenda.php';
    require_once BASE . '/Database/Conexao.php';

    $id_cliente = $_POST['id_cliente'];
    $id_funcionario = $_POST['id_funcionario'];

    $venda = new Venda(null, null, null, null, 0, $id_funcionario, $id_cliente, null);

    $daoVenda = new DaoVenda();

    if ($idDaVenda = $daoVenda->abrirVenda($venda)) {
        //echo 'Venda cadastrada com sucesso. Código: ';
        session_start();
        $_SESSION['vendaaberta'] = $idDaVenda;
        header("location: FormCadastroItemVenda.php");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>

</html>