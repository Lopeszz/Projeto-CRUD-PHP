<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href=".\..\..\Css\style.css">

</head>
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$nivel_acesso = $_POST['nivel_acesso'];
?>

<body>
    <h1>Novo</h1>
    <form action="Update.php" method="post">


        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?= $cpf ?>">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?= $email ?>">
        <br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?= $usuario ?>">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?= $senha ?>">
        <br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular" value="<?= $celular ?>">
        <br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" value="<?= $cep ?>">
        <br>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua" value="<?= $rua ?>">
        <br>

        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" value="<?= $numero ?>">
        <br>

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento" value="<?= $complemento ?>">
        <br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" value="<?= $bairro ?>">
        <br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="<?= $cidade ?>">
        <br>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione um estado</option>
            <option <?= ($estado == 'AC' ? 'selected' : '') ?> value="AC">Acre</option>
            <option <?= ($estado == 'AL' ? 'selected' : '') ?> value="AL">Alagoas</option>
            <option <?= ($estado == 'AP' ? 'selected' : '') ?> value="AP">Amapá</option>
            <option <?= ($estado == 'AM' ? 'selected' : '') ?> value="AM">Amazonas</option>
            <option <?= ($estado == 'BA' ? 'selected' : '') ?> value="BA">Bahia</option>
            <option <?= ($estado == 'CE' ? 'selected' : '') ?> value="CE">Ceará</option>
            <option <?= ($estado == 'DF' ? 'selected' : '') ?> value="DF">Distrito Federal</option>
            <option <?= ($estado == 'ES' ? 'selected' : '') ?> value="ES">Espírito Santo</option>
            <option <?= ($estado == 'GO' ? 'selected' : '') ?> value="GO">Goiás</option>
            <option <?= ($estado == 'MA' ? 'selected' : '') ?> value="MA">Maranhão</option>
            <option <?= ($estado == 'MT' ? 'selected' : '') ?> value="MT">Mato Grosso</option>
            <option <?= ($estado == 'MS' ? 'selected' : '') ?> value="MS">Mato Grosso do Sul</option>
            <option <?= ($estado == 'MG' ? 'selected' : '') ?> value="MG">Minas Gerais</option>
            <option <?= ($estado == 'PA' ? 'selected' : '') ?> value="PA">Pará</option>
            <option <?= ($estado == 'PB' ? 'selected' : '') ?> value="PB">Paraíba</option>
            <option <?= ($estado == 'PR' ? 'selected' : '') ?> value="PR">Paraná</option>
            <option <?= ($estado == 'PE' ? 'selected' : '') ?> value="PE">Pernambuco</option>
            <option <?= ($estado == 'PI' ? 'selected' : '') ?> value="PI">Piauí</option>
            <option <?= ($estado == 'RJ' ? 'selected' : '') ?> value="RJ">Rio de Janeiro</option>
            <option <?= ($estado == 'RN' ? 'selected' : '') ?> value="RN">Rio Grande do Norte</option>
            <option <?= ($estado == 'RS' ? 'selected' : '') ?> value="RS">Rio Grande do Sul</option>
            <option <?= ($estado == 'RO' ? 'selected' : '') ?> value="RO">Rondônia</option>
            <option <?= ($estado == 'RR' ? 'selected' : '') ?> value="RR">Roraima</option>
            <option <?= ($estado == 'SC' ? 'selected' : '') ?> value="SC">Santa Catarina</option>
            <option <?= ($estado == 'SP' ? 'selected' : '') ?> value="SP">São Paulo</option>
            <option <?= ($estado == 'SE' ? 'selected' : '') ?> value="SE">Sergipe</option>
            <option <?= ($estado == 'TO' ? 'selected' : '') ?> value="TO">Tocantins</option>
        </select>
        <br>
        <label for="nivel_acesso">Nível de Acesso:</label>
        <select name="nivel_acesso" id="nivel_acesso">
            <option <?= ($nivel_acesso == '0' ? 'selected' : '') ?> value="0">Usuário</option>
            <option <?= ($nivel_acesso == '1' ? 'selected' : '') ?> value="1">Administrador</option>
        </select>
        <br>
        <button type="buttom">Salvar</button>
    </form>

</body>

</html>