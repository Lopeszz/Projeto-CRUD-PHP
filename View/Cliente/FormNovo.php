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
    <form action="Novo.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular">
        <br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep">
        <br>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua">
        <br>

        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero">
        <br>

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento">
        <br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro">
        <br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">
        <br>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br>

        <label for="nivel_acesso">Nível de Acesso:</label>
        <select name="nivel_acesso" id="nivel_acesso">
            <option value="0">Usuário</option>
            <option value="1">Administrador</option>
        </select>
        <br>

        <button >Cadastrar</button>
        <button type="reset">Limpar</button>

    </form>

</body>

</html>
