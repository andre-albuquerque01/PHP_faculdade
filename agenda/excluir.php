<?php
include_once "conexao.php";

$id = base64_decode($_GET['id']);

$del = $con->query("DELETE FROM pessoa WHERE id_pessoa = $id");

if ($del == true) {
    echo "<script>alert('Excluido com sucesso')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
} else {
    echo "<script>alert('Não foi possível excluir')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}
