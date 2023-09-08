<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
require_once BASE . '/View/Login/CheckLogin.php';
require_once BASE . '/View/Header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja de Roupas</title>
    <link rel="stylesheet" href="./Css/style.css">
</head>

<body>
    <main>
        <section>
            <h1>Bem-vindo à Minha Loja de Roupas</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum, sem eu rhoncus euismod, orci
                nisi aliquam quam, sit amet consequat libero purus eu justo.</p>
            <p>Proin euismod magna non lectus ultricies, a malesuada nunc suscipit. Sed a tortor purus. Cras bibendum
                egestas lorem, id commodo massa facilisis vel.</p>
        </section>

        <section>
            <h2>Últimos Produtos</h2>
            <?php
            require_once BASE . '/Model/Produto.php';
            require_once BASE . '/Database/DAOProduto.php';
            require_once BASE . '/Database/Conexao.php';

            $daoProduto = new DAOProduto();
            $lista = $daoProduto->listaTodos();
            foreach ($lista as $produto) {
                echo '<div class="product">';
                echo '<img src="/macaco/Uploads/' . $produto['id_imagem'] . '" alt="' . $produto['nome'] . '" class="img">';
                echo '<h3>' . $produto['nome'] . '</h3>';
                echo '<p>' . $produto['descricao'] . '</p>';
                echo '<a href="#">Saiba mais</a>';
                echo '<form action="/macaco/view/venda/AbrirVendaPropria.php" method="post">';
                echo '<input type="hidden" name="id" id="id" value="' . $produto['id_produto'] . '">';
                echo '<button>Comprar</button>';
                echo '</form>';
                echo '</div>';
            }
            ?>
        </section>
    </main>

    <?php
    require_once BASE . '/View/Footer.php';
    ?>
</body>

</html>