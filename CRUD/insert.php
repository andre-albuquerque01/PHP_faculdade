<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Insert</title>
</head>

<body>
    <div class="container mt-5">
        <form method="get">
            <div class="nome">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" maxlength="90">
            </div>
            <div class="Email">
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email" class="form-control" maxlength="90">
            </div>
            <div class="Telefone">
                <label for="Telefone">Telefone</label>
                <input type="number" name="telefone" id="Telefone" class="form-control" max="999999999999">
            </div>
            <div class="col-auto mt-3">
                <button class="btn btn-primary">Enviar</button>
            </div>  
        </form>
    </div>
</body>
<?php
include "crud.php";
if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['telefone'])) :
    $cont->Insert($_GET['nome'], $_GET['email'], $_GET['telefone']);
endif;
?>

</html>