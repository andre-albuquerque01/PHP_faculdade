<?php
require_once "conexao.php";
class Crud
{
    private $pdo;
    private $tabela;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->tabela = "contatos";
    }
    public function Delete($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE id = $id";
            $stm = $this->pdo->query($sql);
            if ($stm == true) :
                header("location: index.php");
            endif;
        } catch (Exception $e) {
            echo "Erro ao apagar";
        }
    }
    public function Insert($nome, $email, $telefone)
    {
        try {
            $sql = "INSERT INTO $this->tabela (NOME, EMAIL, TELEFONE) VALUE (:nome, :email, :telefone)";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(":nome", $nome);
            $stm->bindValue(":email", $email);
            $stm->bindValue(":telefone", $telefone);
            $stm->execute();
            if ($stm == true) :
                header("location: index.php");
                echo "Sucesso";
            endif;
        } catch (Exception $e) {
            echo "Erro ao inserir";
        }
    }
    public function SelectAll()
    {
        try {
            $stm = $this->pdo->query("SELECT * FROM $this->tabela");
            return $stm;
        } catch (Exception $e) {
            echo "Erro ao mostrar";
        }
    }
    public function SelectOne($id)
    {
        try {
            $stm = $this->pdo->query("SELECT * FROM $this->tabela WHERE ID = $id");
            return $stm;
        } catch (Exception $e) {
            echo "Erro ao mostrar";
        }
    }

    public function Update($id, $nome, $email, $telefone)
    {
        try {
            $sql = "UPDATE $this->tabela SET NOME = :nome, EMAIL = :email, TELEFONE = :telefone WHERE id = $id";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(":nome", $nome);
            $stm->bindValue(":email", $email);
            $stm->bindValue(":telefone", $telefone);
            $stm->execute();
            if ($stm == true) :
                header("location: index.php");
            endif;
        } catch (Exception $e) {
            echo "Erro ao alterar";
        }
    }
}
$cont = new Crud($pdo);
