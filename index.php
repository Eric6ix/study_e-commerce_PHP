<?php
ob_start();
require('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- TOPO DO SITE -->

<div class="header">
    <p class="logo">Zenkai | Store</p>
    <div class="cart"><i class="fa fa-shopping-cart"></i>
        <p>0</p>
    </div>
</div>

    <!-- FIM DO TOPO SITE -->
     <!-- ##################################################################################################### -->
     <!-- ##################################################################################################### -->
    <!-- CORPO DO SITE -->


    <div class="container">
        <form action="filtros/criar.php" method="post">
        <div class="linha-produto">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-1.jpg" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Curso PHP</p>
                    <h2>R$ 499</h2>
                    <input type="hidden" name="id-produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" nome="addcarrinho">Adcionar ao carrinho</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- FIM CORPO DO SITE -->
</body>
</html>