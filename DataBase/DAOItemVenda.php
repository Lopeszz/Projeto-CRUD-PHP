<?php
class DAOItemVenda
{
    public function listaPorVenda($idVenda)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select id_itemvenda, venda_id, produto_id, qtd, subtotal, qtd*subtotal as subtotal from itemvenda where venda_id = ?;');
        $pst->bindValue(1, $idVenda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(ItemVenda $ItemVenda)
    {
        $sql = 'INSERT INTO ItemVenda (venda_id, produto_id, qtd, subtotal) values (?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $ItemVenda->getVenda_id());
        $pst->bindValue(2, $ItemVenda->getProduto_id());
        $pst->bindValue(3, $ItemVenda->getQtd());
        $pst->bindValue(4, $ItemVenda->getSubtotal());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from ItemVenda where id_ItemVenda = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(ItemVenda $ItemVenda)
    {
        $sql = 'UPDATE ItemVenda set venda_id = ?, produto_id = ?, qtd = ?, subtotal = ? where id_itemvenda = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $ItemVenda->getVenda_id());
        $pst->bindValue(2, $ItemVenda->getProduto_id());
        $pst->bindValue(3, $ItemVenda->getQtd());
        $pst->bindValue(4, $ItemVenda->getSubTotal());
        $pst->bindValue(5, $ItemVenda->getId_itemVenda());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>