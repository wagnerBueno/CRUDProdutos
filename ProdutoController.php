<?php 
require_once ('/Produto.php');

    $produtos = array();

    function inserir($descricao) {
        $produto = new Produto($descricao);
        
        $produtos[] = $produto;
    }

    function deletar() {

    }

    function atualizar() {

    }

    function buscarPorId() {

    }

    function listar() {

    }
?>