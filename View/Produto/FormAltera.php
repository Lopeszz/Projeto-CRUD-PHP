<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>
</head>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$qtd_estoque = $_POST['qtd_estoque'];
$fornecedor_id = $_POST['fornecedor_id'];
?>

<body>
    <h1>Editar Funcionario</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="descricao" value="<?= $descricao ?>">
        <br>

        <label for="preco">Preco:</label>
        <input type="text" name="preco" id="preco" value="<?= $preco ?>">
        <br>

        <label for="qtd_estoque">Qtd_estoque:</label>
        <input type="text" name="qtd_estoque" id="qtd_estoque" value="<?= $qtd_estoque ?>">
        <br>

        <label for="fornecedor_id">Fornecedor_id:</label>
        <input type="text" name="fornecedor_id" id="fornecedor_id" value="<?= $fornecedor_id ?>">
        <br>

        <button type="buttom">Salvar</button>
    </form>
</body>

</html>