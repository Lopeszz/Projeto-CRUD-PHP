<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
        }

        .login-container {
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

        .login-button {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .login-button:hover {
            background-color: #e55000;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="mb-4">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="usuario" name="usuario" id="usuario" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-4">
                    <button class="login-button">Logar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>