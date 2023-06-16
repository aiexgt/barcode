<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador Código Barras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./assets/src/jquery/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
</head>

<body class="bg-secondary">

    <div class="container">

        <div class="bg-white m-5 p-4 rounded">
            <div class="row">
                <div class="col text-center">
                    <p class="fs-1 fw-bold">Generador Código Barras</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="areaCodigos" class="form-label">Pegá los código de barras separados por comas (,) con un máximo de 100 códigos.</label>
                        <textarea class="form-control" id="areaCodigos" rows="12"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" align="center">
                    <button type="button" class="btn btn-lg btn-danger">Limpiar</button>
                    <button type="button" class="btn btn-lg btn-primary" onclick="enviarCodigos()">Generar</button>
                </div>
            </div>
        </div>

    </div>

</body>

</html>