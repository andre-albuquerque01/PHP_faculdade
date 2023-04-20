<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? família= Montserrat:wght@400;500;600;700 & display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Calucular IMC</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 100vw;
        min-height: 100vh;
        background-color: #474a8a;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .home {
        background-color: #fff;
        min-width: 30%;
        padding: 2em;
        border-radius: 1em;
    }

    .text-title {
        padding: 0.5em 0;
    }

    .text-title h1 {
        text-align: center;
        padding: 0.5em;
    }

    .form {
        padding: 1em 0;
    }

    .form input {
        width: 100%;
        padding: 1em;
        font-size: 1em;
    }

    .form #button {
        cursor: pointer;
    }

    .form h2 {
        text-align: center;
        padding: 0.5em;
    }

    .container #link {
        padding: 1em 2em;
        font-size: 1em;
        cursor: pointer;
    }
</style>

<body>

    <div class="container">
        <div class="home">
            <div class="text-title">
                <h1>Calcula IMC</h1>
            </div>

            <form class="form" action="" class="form" method="POST">
                <label for="peso">Informe seu peso (Kg)</label>
                <div class="inputs">
                    <input type="text" name="peso" id="peso" required>
                </div>
                <br>
                <label for="altura">Informe sua altura</label>
                <div class="input">
                    <input type="text" name="altura" id="altura" required>
                </div>
                <br>
                <div class="input">
                    <input id="button" name="enviar" type="submit" value="Enviar">
                </div>


                <?php
                if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                    die();
                }


                $inputPeso = $_POST['peso'];
                $inputAltura = $_POST['altura'];

                $inputPesoFormatado = str_replace(',', '.', $inputPeso);
                $inputAlturaFormatado = str_replace(',', '.', $inputAltura);

                $imc = calculaImc($inputPesoFormatado, $inputAlturaFormatado);
                $situacao = informaImc($imc);

                function calculaImc($peso, $altura)
                {
                    return number_format($peso / ($altura * $altura), 2);
                }

                function informaImc($imc)
                {
                    $resultadoImc = '';
                    switch ($imc) {
                        case $imc < 17:
                            $resultadoImc = 'Muito abaixo do peso.';
                            break;
                        case $imc < 18.49:
                            $resultadoImc = 'Abaixo do peso.';
                            break;
                        case $imc >= 18.5 && $imc <= 24.99:
                            $resultadoImc = 'Normal';
                            break;
                        case $imc >= 25 && $imc <= 29.99:
                            $resultadoImc = 'Acima do peso';
                            break;
                        case $imc >= 30 && $imc <= 34.99:
                            $resultadoImc = 'Obesidade I';
                            break;
                        case $imc >= 35 && $imc <= 39.99:
                            $resultadoImc = 'Obesidade II (severa)';
                            break;
                        case $imc > 40:
                            $resultadoImc = 'Obesidade III (mórbida)';
                            break;
                        default:
                            $resultadoImc = 'ERRO';
                            break;
                    }
                    return $resultadoImc;
                }

                ?>
                <h2>Resultado do IMC</h2>
                <p>Seu peso é:
                    <?php echo $inputPeso ?> Kg
                </p>
                <p>Sua altura é:
                    <?php echo $inputAltura ?> Metros
                </p>
                <p>Seu IMC:
                    <?php echo $imc ?>
                </p>

                <p>Sua situação é:
                    <?php echo $situacao ?>
                </p>
            </form>
        </div>
    </div>
</body>

</html>