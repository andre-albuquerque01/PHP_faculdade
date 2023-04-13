<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Alterar</title>
</head>

<body>
    <?php
    include "crud.php";
    include_once "conexao.php";
    $id = $_GET['id'];
    $stm = $pdo->query("SELECT * FROM `contatos` WHERE ID = $id");
    while($ind = $stm->fetch()){
        $nome = $ind['NOME'];
        $email = $ind['EMAIL'];
        $telefone = $ind['TELEFONE'];
    }
    ?>
    <div class="container mt-5">
        <form method="POST">
            <div class="nome">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?= $nome ?>" required>
            </div>
            <div class="Email mt-3">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="Email" value="<?= $email ?>" required>
            </div>
            <div class="Telefone mt-3">
                <label for="Telefone">Telefone</label>
                <input type="number" name="telefone" id="Telefone" class="form-control" value="<?= $telefone ?>" required>
            </div>
            <div class="col-auto mt-3">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
if (isset($id) && isset($nome) && isset($email)) :
    $cont->update($id, $nome, $email, $telefone);
endif;
?>

</html>