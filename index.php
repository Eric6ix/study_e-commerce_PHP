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
    <!-- Cards -->


    <div class="container">
        <div class="linha-produto">
        <form action="filtros/criar.php" method="post">
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

            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-2.jpg" class="produtoMiniatura">
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

            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-3.jpg" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Curso de HTML 5</p>
                    <h2>R$ 499</h2>
                    <input type="hidden" name="id-produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" nome="addcarrinho">Adcionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-4.jpg" class="produtoMiniatura">
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
    <!-- FIM dos Cards -->
    <!-- BARRA LATERAL -->
     <div class="barra-lateral">
        <div class="topo-do-carrinho">
            <p>Meu Carrinho</p>
            </div>

            <div class="item-carrinho">
              <div class="line-img">
                   <img src="assets/img/produto-4.jpg" alt="" class="img-carrinho">
             </div>

             <p>Curso PHP</p>
             <h2>R$ 422</h2>
             <form action="filtros/excluir.php" method="post">
                 <input type="hidden" name="id-produto" value="">
                 <button type="submit" class="icon-trash"><i class="fa fa-trash-o"></i></button>
             </form>


            </div>


            <div class="item-carrinho-null">Seu carrinho está vazio!</div>

            <div class="footer">
                <h3>Total</h3>
                <h2>R$ 444</h2>
            </div>


         </div>
    <!-- FIM DA BARRA LATERAL -->
    

    </div>

    <!-- FIM CORPO DO SITE -->
</body>
</html>