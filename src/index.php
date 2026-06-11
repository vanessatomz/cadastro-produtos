<?php
    require_once "produto.php";
    $listaProdutos = [];

    $listaProdutos[] = new Produto("Notebook",4.566,3);
    $listaProdutos[] = new Produto("Smartphone",1.499,6);
    $listaProdutos[] = new Produto("Fone",60.43,9);

    foreach($listaProdutos as $produto){
         echo "Nome: ".$produto->getNome() . " - ".$produto->getPreco()*$produto->getQuantidade()."<br>";
    }
    
?>