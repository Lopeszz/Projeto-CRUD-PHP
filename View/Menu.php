<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
require_once BASE . '/View/Login/CheckLogin.php';
require_once BASE . '/View\Header.php';

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
            <div class="product">
                <img src="1.jpg" alt="Produto 1" class="img">
                <h3>Produto 1</h3>
                <p>Descrição breve do Produto 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="product">
                <img src="1.jpg" alt="Produto 2" class="img">
                <h3>Produto 2</h3>
                <p>Descrição breve do Produto 2. Nullam condimentum, sem eu rhoncus euismod, orci nisi aliquam quam.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div class="product">
                <img src="3.jpg" alt="Produto 3" class="img">
                <h3>Produto 3</h3>
                <p>Descrição breve do Produto 3. Sed a tortor purus. Cras bibendum egestas lorem, id commodo massa
                    facilisis vel.</p>
                <a href="#">Saiba mais</a>
            </div>
        </section>
    </main>

    <?php
    require_once BASE . '/View\Footer.php';
    ?>
</body>

</html>