<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Novo</h1>
    <form action="Novo.php" method="post" onsubmit="return validateForm()">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        
        <button type="submit">Cadastro</button>
        <button type="reset">Limpar</button>

    </form>

</body>

</html>