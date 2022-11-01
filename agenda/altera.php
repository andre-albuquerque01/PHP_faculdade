<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Altera</title>
</head>

<body>
    <?php
    include_once "menu.php";
    ?>
    <div class="conteiner">
        <?php
        $id = base64_decode($_GET['id']);
        ?>
        <h1>Altera</h1>
        <form action="crud/recebeAlt.php?id=<?= $id ?>" method="post">
            <?php
            include_once "conexao.php";

            $sel = $con->query("SELECT id_pessoa, ds_nome, ds_email, dt_nasc, cd_sexo, nr_telefone FROM pessoa WHERE id_pessoa = $id");
            while ($row = $sel->fetch()) {
                $nome = $row["ds_nome"];
                $sex = strtoupper($row["cd_sexo"]);
                $dt_nasc = $row["dt_nasc"];
                $nr_telefone = $row["nr_telefone"];
                $email = $row["ds_email"];
            }
            ?>
            <div class="col-md-4 m-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?= $nome ?>" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="telefone">Telefone</label>
                <input type="number" id="telefone" name="telefone" class="form-control" value="<?= $nr_telefone ?>" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="data">Data de nascimento</label>
                <input type="date" id="data" name="data" class="form-control" min="1900-01-01" value="<?= $dt_nasc ?>" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= $email ?>" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="sexo">Sexo:</label>
                <input type="radio" name="sex" id="F" class="form-check-input" value="F" <?php echo $sex == "F" ? "checked" : "" ?>><label for="F">Femenino</label>
                <input type="radio" name="sex" id="M" class="form-check-input" value="M" <?php echo $sex == "M" ? "checked" : "" ?>><label for="M">Masculino</label>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-primary m-3">
            </div>
        </form>
    </div>
</body>

</html>