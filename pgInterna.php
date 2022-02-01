<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Facelook | <?php echo($_SESSION["cargo"]); ?></title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 40px;">
            <a style="margin-left: 40px; margin-right: 40px;">Facelook</a>

            <?php 
            
                $acesso = $_GET["acesso"];

                if($acesso == 1) {
                    include("menuAdministrador.php");
                } 
                else if($acesso == 2) {
                    include("menuSuporte.php");
                }
                else if($acesso == 3) {
                    include("menuVendedor.php");
                }

            ?>
        </nav>

        <h4>Olá, <strong><?php echo($_SESSION["nome"]); ?></strong>.</h4>
        <p>Você está conectado como <strong><?php echo($_SESSION["cargo"]); ?></strong>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>