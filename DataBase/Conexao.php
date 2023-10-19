<?php
class conexao
{

    private static $dsn = 'mysql:host=localhost;dbname=gico';

    private static $usuario = 'root';

    private static $senha = 'root';

    private static $conexao = null;

    public static function getConexao(): PDO
    {
        if (Conexao::$conexao == null) {
            try {
                conexao::$conexao = new PDO(conexao::$dsn, conexao::$usuario, conexao::$senha);

            } catch (PDOException $e) {
                echo $e->getMessage();

            }
        }
        return conexao::$conexao;
    }
    public static function getPreparedStatement($sql): PDOStatement
    {
        $pst = null;
        if (conexao::getConexao() != null) {
            try {
                $pst = conexao::$conexao->prepare($sql);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $pst;
    }
}
?>