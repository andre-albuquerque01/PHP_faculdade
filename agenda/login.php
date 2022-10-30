<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <?php
    include_once "conexao.php";
    if (!isset($_POST['btn'])) {
    ?>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Enviar" name="btn">
        </form>
    <?php
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            $stm = $con->prepare("SELECT ds_nome FROM tb_pessoa WHERE ds_email = :email and ds_senha = :senha");
            $stm->bindValue(':email', $email);
            $stm->bindValue(':senha', $senha);
            $stm->execute();
            $row = $stm->fetchAll();
            if ($stm->rowCount() > 0) {
                setcookie("usuario", $row["ds_nome"]);
                setcookie("ts_login", time());
                $_SESSION['usuario'] = $row["ds_nome"];
                header('Location: index.php');
            } else {
                echo "<script>alert('Usuário ou Senha inválido')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
            }
        } catch (PDOException $e) {
        }
    }
    ?>
</body>

</html>