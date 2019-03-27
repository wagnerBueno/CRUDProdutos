<?php
	class Produto {
		
		public $id;
		public $descricao;
		public $preco;

		function __construct($id, $descricao, $preco) {
			$this->id = $id;
			$this->descricao = $descricao;
			$this->preco = $preco;
		}

	}