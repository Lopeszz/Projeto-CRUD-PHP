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

    require_once BASE . '/Model/Produto.php';
    require_once BASE . '/Database/DAOProduto.php';
    require_once BASE . '/Database/Conexao.php';


    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $fornecedor_id = $_POST['fornecedor_id'];

    $imagem_nome = $_FILES['id_imagem']['name'];
    $imagem_temp = $_FILES['id_imagem']['tmp_name'];

    // Defina o diretório de upload
    $diretorio_upload = BASE . '/Uploads/'; // Certifique-se de criar essa pasta no seu servidor
    
    // Crie um nome único para a imagem
    $nome_imagem_unico = uniqid() . '_' . $imagem_nome;

    // Mova o arquivo de imagem para o diretório de upload
    move_uploaded_file($imagem_temp, $diretorio_upload . $nome_imagem_unico);


    // Crie um novo objeto Produto com os dados e o nome da imagem
    $Produto = new Produto($nome, $descricao, $preco, $qtd, $nome_imagem_unico, $fornecedor_id);

    $daoProduto = new DAOProduto();

    if ($daoProduto->inclui($Produto)) {
        echo 'Salvo';
        header('Location: http://localhost/macaco/View/Produto/Lista.php');

    } else {
        echo 'Not save.';
    }

    ?>
    // <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Produtos</a></button>

</body>

</html>