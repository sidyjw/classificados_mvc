<?php 
class cadastroController extends controller{

	public function index(){
		$dados = [];
		$user = new Usuarios();
		if(!empty($_POST['cadastroNome']) && !empty($_POST['cadastroEmail'])){
			$nome = htmlspecialchars(addslashes($_POST['cadastroNome']));
			$email = htmlspecialchars(addslashes($_POST['cadastroEmail']));
			$senha = htmlspecialchars(addslashes($_POST['cadastroSenha']));

			$user->cadastro($nome, $email, $senha);

		}
		$this->loadTemplate('cadastro', $dados);
	}

}