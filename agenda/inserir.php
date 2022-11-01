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
    <title>Adicionar</title>
</head>

<body>
    <div class="conteiner">
        <h1>Cadastro</h1>
        <form action="crud/recebe.php" method="post">
            <div class="col-md-4 m-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="telefone">Telefone</label>
                <input type="number" id="telefone" name="telefone" class="form-control" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="data">Data de nascimento</label>
                <input type="date" id="data" name="data" class="form-control" min="1900-01-01" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div>
            <div class="col-md-4 m-3">
                <label for="sexo">Sexo:</label>
                <input type="radio" name="sex" id="F" value="F" class="form-check-input" required><label for="F">Femenino</label> 
                <input type="radio" name="sex" id="M" value="M" class="form-check-input"><label for="M">Masculino</label> 
            </div>
            <div class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-primary m-3">
            </div>
        </form>
    </div>
</body>

</html>