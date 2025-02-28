<?php

ob_start();
require('../../sheep_core/config.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($produto['criarProduto'])){
    unset($produto['criarProduto']);
    $produto['capa'] = ($_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null);
    var_dump($produto);

    $salvar = new Produtos();
    $salvar -> criarProduto($produto);

    if(salvar -> getResultato()){
        header("Location: ".Home."/painel/index.php?sucesso=true");
    }else{
        header("Location: ".Home."/painel/index.php?erro=true");

    }
}


?>