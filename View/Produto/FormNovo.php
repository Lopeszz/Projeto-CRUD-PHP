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
        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao">
        <br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco">
        <br>

        <label for="qtd">Quantidade em Estoque:</label>
        <input type="text" name="qtd" id="qtd">
        <br>

        <label for="fornecedor_id">ID do Fornecedor:</label>
        <select name="fornecedor_id" id="fornecedor_id">
            <option value="null"></option>
            <?php

            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\macaco');
            require_once BASE . '/Model/Fornecedor.php';
            require_once BASE . '/Database/DAOFornecedor.php';
            require_once BASE . '/Database/Conexao.php';

            $daoConexao = new DAOFornecedor();
            $lista = $daoConexao->listaTodos();

            foreach ($lista as $fornecedor) {
                $id = $fornecedor['id_fornecedor'];
                $nome = $fornecedor['nome'];
                echo "<option value='$id'>$nome</option>";
            }
            ?>

        </select>
        </br>
        
        <button type="submit">Cadastro</button>
        <button type="reset">Limpar</button>

    </form>

    <script>
        function validateForm() {
            var fornecedor_id = document.getElementById("fornecedor_id").value;
            if (fornecedor_id === "null") {
                alert("Selecione um fornecedor válido");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>
