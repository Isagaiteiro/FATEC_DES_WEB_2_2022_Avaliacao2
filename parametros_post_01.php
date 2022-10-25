<!--3) Cadastrar produto via POST-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <form action="parametros_post_02.php" method="post">
                <label for="name">Nome do Produto:</label><br>
                <input type="text" id="nomep" name="nomep"><br><br>
                <label for="quantidade">Quantidade:</label><br>
                <input type="numeric" id="quantidade" name="quantidadees"><br><br>
                <label for="valor">Preço:</label><br>
                <input type="numeric" id="valuep" name="valuep"><br><br>
                <label for="features">Características:</label><br>
                <input type="text" id="featuresp" name="featuresp"><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
