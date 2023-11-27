<?php
require_once "conexao.php";
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
    public function listaPorUsuario($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select id_cliente from Cliente where usuario = ?');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $Cliente)
    {
        $sql = 'CALL InserirCliente(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
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

    public function altera(Cliente $cliente)
    {
        $sql = 'CALL AtualizarCliente(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getEmail());
        $pst->bindValue(4, $cliente->getUsuario());
        $pst->bindValue(5, $cliente->getSenha());
        $pst->bindValue(6, $cliente->getCelular());
        $pst->bindValue(7, $cliente->getCep());
        $pst->bindValue(8, $cliente->getRua());
        $pst->bindValue(9, $cliente->getNumero());
        $pst->bindValue(10, $cliente->getComplemento());
        $pst->bindValue(11, $cliente->getBairro());
        $pst->bindValue(12, $cliente->getCidade());
        $pst->bindValue(13, $cliente->getEstado());
        $pst->bindValue(14, $cliente->getNivel_acesso());
        $pst->bindValue(15, $cliente->getId_cliente());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'CALL ExcluirCliente(?);';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
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