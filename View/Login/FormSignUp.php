<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
        }

        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-card {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .signup-card h2 {
            text-align: center;
        }

        .login-button,
        .signup-button {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            display: block;
            /* Garante que os botões ocupem toda a largura */
            margin-bottom: 10px;
            /* Espaçamento inferior entre os botões */
        }

        .login-button:hover {
            background-color: #e55000;
        }

        .signup-button,
        a {
            text-align: center;
            text-decoration: none;
        }

        .signup-button:hover {
            background-color: #e55000;
        }
    </style>
</head>

<body>
    <div class="signup-container">
        <div class="signup-card">
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="post">
                <div class="mb-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-4">
                    <button class="signup-button">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>