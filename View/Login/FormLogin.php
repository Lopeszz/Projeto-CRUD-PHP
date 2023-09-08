<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href=".\..\..\Css\login.css">

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
            <div class="mb-4">
                <a href="FormSignUp.php" class="signup-button">Cadastre-se</a>
            </div>
        </div>
    </div>
</body>

</html>