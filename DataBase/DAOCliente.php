<?php
class DAOCliente
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select * from cliente;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $Cliente)
    {
        $sql = 'INSERT INTO cliente (nome,cpf,email,usuario,senha,celular,cep,rua,numero,complemento,bairro,cidade,estado,nivel_acesso) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Cliente->getnome());
        $pst->bindValue(2, $Cliente->getCpf());
        $pst->bindValue(3, $Cliente->getEmail());
        $pst->bindValue(4, $Cliente->getUsuario());
        $pst->bindValue(5, $Cliente->getSenha());
        $pst->bindValue(6, $Cliente->getCelular());
        $pst->bindValue(7, $Cliente->getCep());
        $pst->bindValue(8, $Cliente->getRua());
        $pst->bindValue(9, $Cliente->getNumero());
        $pst->bindValue(10, $Cliente->getComplemento());
        $pst->bindValue(11, $Cliente->getBairro());
        $pst->bindValue(12, $Cliente->getCidade());
        $pst->bindValue(13, $Cliente->getEstado());
        $pst->bindValue(14, $Cliente->getNivel_acesso());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from cliente where id_cliente = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Cliente $Cliente)
    {
        $sql = 'UPDATE cliente set nome = ?, cpf = ?, email = ?, usuario = ?, senha = ?, celular = ?, cep = ?, 
        rua = ?, numero = ?, complemento = ?, bairro = ?, cidade = ?, estado = ?, nivel_acesso = ? where id_cliente = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Cliente->getnome());
        $pst->bindValue(2, $Cliente->getCpf());
        $pst->bindValue(3, $Cliente->getEmail());
        $pst->bindValue(4, $Cliente->getUsuario());
        $pst->bindValue(5, $Cliente->getSenha());
        $pst->bindValue(6, $Cliente->getCelular());
        $pst->bindValue(7, $Cliente->getCep());
        $pst->bindValue(8, $Cliente->getRua());
        $pst->bindValue(9, $Cliente->getNumero());
        $pst->bindValue(10, $Cliente->getComplemento());
        $pst->bindValue(11, $Cliente->getBairro());
        $pst->bindValue(12, $Cliente->getCidade());
        $pst->bindValue(13, $Cliente->getEstado());
        $pst->bindValue(14, $Cliente->getNivel_acesso());
        $pst->bindValue(15, $Cliente->getId_cliente());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function procuraUm(Cliente $cliente)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select usuario, senha from cliente where usuario = ?;');
        $pst->bindValue(1, $cliente->getUsuario());
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
        
    }
}
?>