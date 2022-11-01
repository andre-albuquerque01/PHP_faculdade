<?php
include_once "../conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$email = $_POST['email'];
$sex = $_POST['sex'];
if (filter_var($email, FILTER_SANITIZE_EMAIL)) {
    try {
        $sql = ("UPDATE `pessoa`SET `ds_nome` = :ds_nome, `cd_sexo` = :cd_sexo, `dt_nasc` = :dt_nasc, `nr_telefone` = :nr_telefone, `ds_email` = :ds_email WHERE id_pessoa = $id");
        $stm = $con->prepare($sql);
        $stm->bindParam(':ds_nome', $nome);
        $stm->bindParam(':cd_sexo', $sex);
        $stm->bindParam(':dt_nasc', $data);
        $stm->bindParam(':nr_telefone', $telefone);
        $stm->bindParam(':ds_email', $email);
        $stm->execute();

        if ($stm->rowCount() > 0) {
            echo "<script>alert('Feito com sucesso')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        } else {
            echo "<script>alert('Não foi possível alterar')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Não foi possível alterar, erro na tentativa')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    }
}
