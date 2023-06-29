<?php
require_once "conexao.php";
class Crud
{
    public $pdo;
    public $tabela;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->tabela = "contatos";
    }
    public function Delete($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = $id";
        $stm = $this->pdo->query($sql);
        if ($stm == true) :
            header("location: index.php");
        endif;
    }
    public function Insert($nome, $email, $telefone)
    {
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
    }
    public function SelectAll()
    {
        $stm = $this->pdo->query("SELECT * FROM $this->tabela");
        return $stm;
    }

    public function Update($id, $nome, $email, $telefone)
    {
        $sql = "UPDATE $this->tabela SET NOME = :nome, EMAIL = :email, TELEFONE = :telefone WHERE id = $id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":nome", $nome);
        $stm->bindValue(":email", $email);
        $stm->bindValue(":telefone", $telefone);
        $stm->execute();
        if ($stm == true) :
            header("location: index.php");
        endif;
    }
}
$cont = new Crud($pdo);
// $cont->Insert("André", "andre@albuquerque.com","61985261944");
// $cont->Insert("Teste Gonçalve", "teste@gonçalve.com","6182561944");
// $cont->Update("1","Andre", "teste@gonçalve.com","6182561944");
// $cont->Select(1);
