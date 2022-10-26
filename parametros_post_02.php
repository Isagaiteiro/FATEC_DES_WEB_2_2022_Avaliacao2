<!--4) Receber dados do produto e mostrar na tela-->

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
            <?php
            include ('./dados_banco.php');
            
            function validar_post($dado_enviado){
                if(isset($dado_enviado) and $dado_enviado <> ""){
                    return TRUE;
                }
                return FALSE;
            }

            if(validar_post($_POST['nomep']) && validar_post($_POST['quantidadees']) && validar_post($_POST['valuep']) && validar_post($_POST['featuresp'])){
                echo '<br><br>';
                echo 'Nome: '.$_POST['nomep'];
                echo '<br><br>';
                echo 'Quantidade: '.$_POST['quantidadees'];
                echo '<br><br>';
                echo 'Preço: '.$_POST['valuep'];
                echo '<br><br>';
                echo 'Características: '.$_POST['featuresp'];
                $mysqli->query ("INSERT INTO produtos (nome, quantidade, preco, caracteristica) 
                VALUES (".$_POST['nomep'].",".$_POST['quantidadees'].",".$_POST['valuep'].",".$_POST['featuresp'].")");
               
                
            }

            ?>
        
            <br></br>
            <a href="./start.php">Voltar</a>
        </div>
    </div>
</body>
</html>