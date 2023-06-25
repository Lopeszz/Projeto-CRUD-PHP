<?php
class DAOVenda
{
    public function listaTodos()
    {
        $lista = [];
        $sql = 'SELECT * FROM venda;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function abrirVenda(Venda $venda)
    {
        $sql = 'INSERT INTO venda (situacao, observacoes, data_venda, total_venda, funcionario_id, cliente_id, metodoPagamento_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $venda->getSituacao());
        $pst->bindValue(2, $venda->getObservacoes());
        $pst->bindValue(3, $venda->getData_venda());
        $pst->bindValue(4, $venda->getTotal_venda());
        $pst->bindValue(5, $venda->getFuncionario_id());
        $pst->bindValue(6, $venda->getCliente_id());
        $pst->bindValue(7, $venda->getMetodoPagamento_id());

        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }

    public function fecharVenda($idvenda, $total_venda)
    {
        $sql = 'UPDATE venda SET situacao = 0, total_venda = ? WHERE id_venda = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        
        $pst->bindValue(1, intval($total_venda));
        $pst->bindValue(2, $idvenda);
        var_dump($total_venda);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE FROM venda WHERE id_venda = ?';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
?>