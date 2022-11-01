<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>

<body>
    <div class="conteiner">
        <?php
        include_once "conexao.php";
        if (!isset($_POST['btn'])) {
        ?>
            <form action="" method="POST">
                <div class="col-md-4 m-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-4 m-3">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>
                <div class="col-md-4 m-3">
                    <input type="submit" value="Enviar" name="btn" class="btn btn-primary">
                </div>
            </form>
    </div>
<?php
        } else {
            $email = $_POST['email'];
            $senha = base64_encode($_POST['senha']);

            try {
                $stm = $con->prepare("SELECT ds_nome FROM pessoa WHERE ds_email = :email and ds_senha = :senha");
                $stm->bindValue(':email', $email);
                $stm->bindValue(':senha', $senha);
                $stm->execute();
                $row = $stm->fetch();
                if ($stm->rowCount() > 0) {
                    setcookie("usuario", $row["ds_nome"]);
                    setcookie("ts_login", time());
                    session_start();
                    $_SESSION['usuario'] = $row["ds_nome"];
                    $_SESSION['ts_login'] = time();
                    header('Location: index.php');
                } else {
                    echo "<script>alert('Usuário ou Senha inválido')</script>";
                    echo "<script>window.location.href = 'login.php'</script>";
                }
            } catch (PDOException $e) {
                echo "<script>alert('Houve erro no servidor!')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
            }
        }
?>
</body>

</html>