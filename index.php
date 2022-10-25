<!-- 1) Tela de login, pega as váriáveis do arquivo dados_banco.php, para validar o login-->

<?php
    require_once('./dados_banco.php');
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        if ($_POST['username']==$username and $_POST['password']==$password){
            $_SESSION['loggedin']=TRUE;

            $_SESSION['username']='Isabela';
            header("location: start.php");
        } else {
            $_SESSION['loggedin']=FALSE;
        }
    }
?>

<!--Entrada de dados para o login-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="text-center bg-light">
    <div class="d-flex justify-content-center">
        
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="username" class="sr-only">Digite seu usuário: </label><br>
                <input type="text" class="form-control" id="username" name="username" required autofocus></input><br>
                <label for="password" class="sr-only">Digite sua senha: </label><br>
                <input type="text" class="form-control" id="password" name="password" required autofocus></input><br><br>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
            </form>
        </div>
    </div>
</body>
</html>