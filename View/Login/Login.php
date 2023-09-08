<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Importe o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-card h2 {
            text-align: center;
        }

        .alert {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .alert svg {
            flex-shrink: 0;
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        /* Adicione uma classe de centralização de texto horizontal */
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h2>Login</h2>
        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/macaco');
        define('HOST', $_SERVER['HTTP_HOST']);
        define('FOLDER', 'macaco');

        require_once BASE . '/Model/Cliente.php';
        require_once BASE . '/Database/DAOcliente.php';
        require_once BASE . '/Database/Conexao.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['password'];

        $Cliente = new Cliente(null, null, null, $usuario, $senha, null, null, null, null, null, null, null, null, null);

        $daoCliente = new DAOCliente();

        $lista = $daoCliente->procuraUm($Cliente);

        if (count($lista) > 0 && password_verify($Cliente->getSenha(), $lista[0]['senha'])) {
            session_start();
            $_SESSION['usuario'] = $lista[0]['usuario'];
            echo '<div class="alert alert-success" role="alert">
                    <i class="fas fa-check-circle" style="padding: 10px"></i>
                    <span class="text-center">Usuário logado com sucesso!</span>
                </div>';
            echo '<script>
                    setTimeout(function () {
                        window.location.href = "http://localhost/macaco/"; // Redirecionar para o local correto após o login
                    }, 2000);
                  </script>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    <i class="fas fa-times-circle" style="padding: 10px"></i>
                    <span class="text-center">Falha ao logar, tente novamente</span>
                </div>';
            echo '<script>
                    setTimeout(function () {
                        window.location.href = "http://localhost/macaco/view/login/formlogin.php"; // Redirecionar de volta para o formulário de login em caso de falha
                    }, 2000);
                  </script>';
        }
        ?>
    </div>
</body>

</html>