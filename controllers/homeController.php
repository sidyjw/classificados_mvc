<?php 

class homeController extends controller{
	public function index(){
		$anuncios = new Anuncio();

		$dados = [
			'info' => $anuncios->getAll(),	
		];

		$this->loadTemplate('home', $dados);
	}
}