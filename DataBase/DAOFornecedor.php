<?php
class DAOFornecedor
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select * from Fornecedor;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Fornecedor $Fornecedor)
    {
        $sql = 'INSERT INTO Fornecedor (nome,cnpj,email,usuario,senha,celular,cep,rua,numero,complemento,bairro,cidade,estado) values (?,?,?,?,?,?,?,?,?,?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Fornecedor->getnome());
        $pst->bindValue(2, $Fornecedor->getCnpj());
        $pst->bindValue(3, $Fornecedor->getEmail());
        $pst->bindValue(4, $Fornecedor->getUsuario());
        $pst->bindValue(5, $Fornecedor->getSenha());
        $pst->bindValue(6, $Fornecedor->getCelular());
        $pst->bindValue(7, $Fornecedor->getCep());
        $pst->bindValue(8, $Fornecedor->getRua());
        $pst->bindValue(9, $Fornecedor->getNumero());
        $pst->bindValue(10, $Fornecedor->getComplemento());
        $pst->bindValue(11, $Fornecedor->getBairro());
        $pst->bindValue(12, $Fornecedor->getCidade());
        $pst->bindValue(13, $Fornecedor->getEstado());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from Fornecedor where id_Fornecedor = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Fornecedor $Fornecedor)
    {
        $sql = 'UPDATE Fornecedor set nome = ?, cnpj = ?, email = ?, usuario = ?, senha = ?, celular = ?, cep = ?, rua = ?, numero = ?, complemento = ?, bairro = ?, cidade = ?, estado = ? where id_Fornecedor = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Fornecedor->getnome());
        $pst->bindValue(2, $Fornecedor->getCnpj());
        $pst->bindValue(3, $Fornecedor->getEmail());
        $pst->bindValue(4, $Fornecedor->getUsuario());
        $pst->bindValue(5, $Fornecedor->getSenha());
        $pst->bindValue(6, $Fornecedor->getCelular());
        $pst->bindValue(7, $Fornecedor->getCep());
        $pst->bindValue(8, $Fornecedor->getRua());
        $pst->bindValue(9, $Fornecedor->getNumero());
        $pst->bindValue(10, $Fornecedor->getComplemento());
        $pst->bindValue(11, $Fornecedor->getBairro());
        $pst->bindValue(12, $Fornecedor->getCidade());
        $pst->bindValue(13, $Fornecedor->getEstado());
        $pst->bindValue(14, $Fornecedor->getid_fornecedor());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }


}
?>