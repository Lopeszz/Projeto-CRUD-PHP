<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<?php
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'macaco');
?>

<body>
    <h1>Menu Clientes</h1>
    <?php

    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Cliente/FormNovo.php" style="text-decoration:none"><button>Cadastrar</button></a><br>';
    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Cliente/Lista.php" style="text-decoration:none"><button>Lista</button></a>';
    ?>
    <h1>Menu Fornecedor</h1>
    <?php

    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Fornecedor/FormNovo.php" style="text-decoration:none"><button>Cadastrar</button></a><br>';
    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Fornecedor/Lista.php" style="text-decoration:none"><button>Lista</button></a>';
    ?>
    <h1>Menu Funcionario</h1>
    <?php

    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Funcionario/FormNovo.php" style="text-decoration:none"><button>Cadastrar</button></a><br>';
    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Funcionario/Lista.php" style="text-decoration:none"><button>Lista</button></a>';
    ?>
    <h1>Menu Produto</h1>
    <?php
    
    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Produto/FormNovo.php" style="text-decoration:none"><button>Cadastrar</button></a><br>';
    echo '<a href="http://' . HOST . '/' . FOLDER . '/View/Produto/Lista.php" style="text-decoration:none"><button>Lista</button></a>';
    ?>
</body>

</html>