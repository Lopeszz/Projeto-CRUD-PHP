<?php
class DAOProduto
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select * from Produto;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Produto $Produto)
    {
        $sql = 'INSERT INTO produto (nome,descricao,preco,qtd_estoque,fornecedor_id) values (?,?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Produto->getNome());
        $pst->bindValue(2, $Produto->getDescricao());
        $pst->bindValue(3, $Produto->getPreco());
        $pst->bindValue(4, $Produto->getQtd_estoque());
        $pst->bindValue(5, $Produto->getFornecedor_id());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from Produto where id_produto = ?;';
        
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Produto $Produto)
    {
        $sql = 'UPDATE Produto set nome = ?, descricao = ?, preco = ?, qtd_estoque = ?, 
        fornecedor_id = ? where id_produto = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Produto->getNome());
        $pst->bindValue(2, $Produto->getDescricao());
        $pst->bindValue(3, $Produto->getPreco());
        $pst->bindValue(4, $Produto->getQtd_estoque());
        $pst->bindValue(5, $Produto->getFornecedor_id());
        $pst->bindValue(6, $Produto->getFornecedor_id());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }


}
?>