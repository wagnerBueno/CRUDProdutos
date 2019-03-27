<?php 
include_once ('Produto.php');

    $produtos = array();

    function inserir(Produto $produto) {
        $GLOBALS['produtos'][] = $produto;
    }

    function deletar() {
    }

    function atualizar() {
    }

    function buscarPorId($id) {
        foreach($GLOBALS['produtos'] as $prod) {
            if ($prod->id == $id)
                return $prod;
        }
    }

    function listar() {
        return $GLOBALS['produtos'];
    }

    inserir(new Produto(1,"mesa",554.22));
    inserir(new Produto(2,"cadeira",74.92));

    print_r(buscarPorId(1));
    print_r(listar());
?>