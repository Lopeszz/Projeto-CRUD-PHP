<?php
class DAOFuncionario
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select * from Funcionario;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Funcionario $Funcionario)
    {
        $sql = 'INSERT INTO funcionario (nome,cpf,email,usuario,senha,salario,celular,nivel_acesso) values (?,?,?,?,?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Funcionario->getNome());
        $pst->bindValue(2, $Funcionario->getCpf());
        $pst->bindValue(3, $Funcionario->getEmail());
        $pst->bindValue(4, $Funcionario->getUsuario());
        $pst->bindValue(5, $Funcionario->getSenha());
        $pst->bindValue(6, $Funcionario->getSalario());
        $pst->bindValue(7, $Funcionario->getCelular());
        $pst->bindValue(8, $Funcionario->getNivel_acesso());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from funcionario where id_funcionario = ?;';
        
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Funcionario $Funcionario)
    {
        $sql = 'UPDATE Funcionario set nome = ?, cpf = ?, email = ?, usuario = ?, senha = ?, salario = ?, celular = ?, nivel_acesso = ? where id_funcionario = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Funcionario->getnome());
        $pst->bindValue(2, $Funcionario->getCpf());
        $pst->bindValue(3, $Funcionario->getEmail());
        $pst->bindValue(4, $Funcionario->getUsuario());
        $pst->bindValue(5, $Funcionario->getSenha());
        $pst->bindValue(6, $Funcionario->getSalario());
        $pst->bindValue(7, $Funcionario->getCelular());
        $pst->bindValue(8, $Funcionario->getNivel_acesso());
        $pst->bindValue(9, $Funcionario->getId_funcionario());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }


}
?>