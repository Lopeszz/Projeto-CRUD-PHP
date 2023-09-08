<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li class="submenu">
                    <a href="http://localhost/macaco/">
                        <i class="fas fa-bag"></i>
                        <span>
                            <?php echo "Americanas"; ?>
                        </span>
                    </a>
                </li>

                <li class=" submenu">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span>
                            <?php echo "Cliente"; ?>
                        </span>
                    </a>
                    <ul class="submenu-content">
                        <li><a href="http://localhost/macaco/View/Cliente/Lista.php"><i class="fas fa-list"></i>
                                Listagem</a>
                        </li>
                        <li><a href="http://localhost/macaco/View/Cliente/FormNovo.php"><i class="fas fa-user-plus"></i>
                                Cliente</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-truck"></i>
                        <span>
                            <?php echo "Fornecedor"; ?>
                        </span>
                    </a>
                    <ul class="submenu-content">
                        <li><a href="http://localhost/macaco/View/Fornecedor/Lista.php"><i class="fas fa-list"></i>
                                Listagem</a></li>
                        <li><a href="http://localhost/macaco/View/Fornecedor/FormNovo.php"><i
                                    class="fas fa-user-plus"></i>
                                Fornecedor</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span>
                            <?php echo "Funcionário"; ?>
                        </span>
                    </a>
                    <ul class="submenu-content">
                        <li><a href="http://localhost/macaco/View/Funcionario/Lista.php"><i class="fas fa-list"></i>
                                Listagem</a></li>
                        <li><a href="http://localhost/macaco/View/Funcionario/FormNovo.php"><i
                                    class="fas fa-user-plus"></i>
                                Funcionário</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-cube"></i>
                        <span>
                            <?php echo "Produto"; ?>
                        </span>
                    </a>
                    <ul class="submenu-content">
                        <li><a href="http://localhost/macaco/View/Produto/Lista.php"><i class="fas fa-list"></i>
                                Listagem</a>
                        </li>
                        <li><a href="http://localhost/macaco/View/Produto/FormNovo.php"><i class="fas fa-user-plus"></i>
                                Produto</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span>
                            <?php echo "Venda"; ?>
                        </span>
                    </a>
                    <ul class="submenu-content">
                        <li><a href="http://localhost/macaco/View/Venda/Lista.php"><i class="fas fa-list"></i>
                                Listagem</a>
                        </li>
                        <li><a href="http://localhost/macaco/View/Venda/FormNovo.php"><i class="fas fa-user-plus"></i>
                                Venda</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://localhost/macaco/View/Login/Logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>