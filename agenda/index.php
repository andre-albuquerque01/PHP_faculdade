<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>

<body>
    <h1>Agenda</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "conexao.php";

            $sel = $con->query("SELECT id_pessoa, ds_nome, ds_email FROM tb_pessoa");
            while ($row = $sel->fetch()) {
            ?>
                <tr>
                    <td><?= $row["id_pessoa"] ?></td>
                    <td><?= $row["ds_nome"] ?></td>
                    <td><?= $row["ds_email"] ?></td>
                    <td><a href="excluir.php?id=<?= $row["id_pessoa"] ?>">Excluir</a></td>
                    <td><a href="altera.php?id=<?= $row["id_pessoa"] ?>">Alterar</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p><a href="inserir.php">Adicionar nova pessoa</a></p>
</body>

</html>