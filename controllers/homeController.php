<?php 

class homeController extends controller{
	public function index(){
		$anuncios = new Anuncio();
		
		$id = null;
		$login = null;
		if(!empty($_SESSION['id']) && !empty($_SESSION['login'])){
			$id = $_SESSION['id'];
			$login = $_SESSION['login'];
		}		
		$dados = [
			'info' => $anuncios->getAll(),	
			'id' => $id,
			'login' => $login,
		];

		$this->loadTemplateCache('home', "20 seconds", $dados);
	}
}