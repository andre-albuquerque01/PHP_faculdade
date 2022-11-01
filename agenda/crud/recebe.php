<?php
include_once "../conexao.php";


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$senha = base64_encode($_POST['senha']);
if (filter_var($email, FILTER_SANITIZE_EMAIL)) {
    try {
        $sql = ("INSERT INTO `pessoa`(`ds_nome`, `cd_sexo`, `dt_nasc`, `nr_telefone`, `ds_email`, `ds_senha`) VALUE (:ds_nome, :cd_sexo, :dt_nasc, :nr_telefone, :ds_email, :ds_senha)");
        $stm = $con->prepare($sql);
        $stm->bindParam(':ds_nome', $nome);
        $stm->bindParam(':cd_sexo', $sex);
        $stm->bindParam(':dt_nasc', $data);
        $stm->bindParam(':nr_telefone', $telefone);
        $stm->bindParam(':ds_email', $email);
        $stm->bindParam(':ds_senha', $senha);
        $stm->execute();

        if ($stm->rowCount() > 0) {
            echo "<script>alert('Feito com sucesso')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastra')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Não foi possível cadastra')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    }
}
