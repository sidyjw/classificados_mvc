<?php

class Anuncio extends model{
	private $all;

	// public function __construct(){

	// 	$this->getAll();
	// }
	public function getAll(){

		if(!empty($this->all)){
			return $this->all;
		}

		$sql = $this->db->query("SELECT *,(select categorias.nome from categorias where categorias.id = anuncios.id_categoria) as categoria FROM anuncios");

		if($sql->rowCount() > 0){
			$dados = $sql->fetchAll();
			$this->all = $dados;
			return $this->all;
		}
	}
	
}