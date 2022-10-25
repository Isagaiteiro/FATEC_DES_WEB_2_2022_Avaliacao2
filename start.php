<!--2) Se for feito o login, aparece as informações de cadastro e sair, na tela-->

<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true){
        echo("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>PetShop</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Seja bem-vindo (a) <br> <?php echo htmlspecialchars($_SESSION["username"])?>
            </h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex recusandae eos non saepe veniam, unde hic natus dignissimos molestias nulla sint et quos esse quo voluptatibus? Voluptatibus explicabo dolorem delectus!</p>
        </div>
           
            <a href="logout.php">Sair da Conta</a>
            <br></br>
            <a href="./parametros_post_01.php">Cadastrar Produto</a>
        
    </div>
</body>
</html>

