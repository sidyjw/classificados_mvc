<?php 

class homeController extends controller{
	public function index(){
		$anuncios = new Anuncio();
		
		if(!empty($_SESSION['id']) && !empty($_SESSION['login'])){
			$id = $_SESSION['id'];
			$login = $_SESSION['login'];
		}		
		$dados = [
			'info' => $anuncios->getAll(),	
			'id' => $id,
			'login' => $login,
		];

		$this->loadTemplate('home', $dados);
	}
}