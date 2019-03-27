<?php
	class Produto {
		static $cont = 0;
		private $id;
		private $descricao;


		function __construct($descricao) {
			$cont++;
			$this->setId($cont);
			$this->setDescricao($descricao);
		}

		function geiId() {
			return $this->id;
		}

		function setId($id) {
			$this->id = $id;
		}

		function getDescricao() {
			return $this->getDescricao;
		}

		function setDescricao($descricao) {
			$this->descricao = $descricao;
		}
	}