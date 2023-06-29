<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Index</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <tr>
                <td scope="col">Nome</td>
                <td scope="col">Email</td>
                <td scope="col">Telefone</td>
                <td scope="col">#</td>
                <td scope="col">#</td>
            </tr>
            
                <?php
                include "crud.php";
                $st = $cont->SelectAll();
                while ($ind = $st->fetch()) {
                    $id = ($ind['ID']);
                    echo "<tr>";
                    echo "<td>" . ($ind['NOME']) . "</td>";
                    echo "<td>" . ($ind['EMAIL']) . "</td>";
                    echo "<td>" . ($ind['TELEFONE']) . "</td>";
                    echo "<td><a href='update.php?id=$id'>Alterar</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
        </table>
        <a href="insert.php">Inserir</a>
    </div>
</body>

</html>