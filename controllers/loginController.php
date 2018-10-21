<?php 
class loginController extends controller{
	public function index(){
		if(!empty($_POST['loginEmail'])){
			$user = new Usuarios();
			$email = htmlspecialchars(addslashes($_POST['loginEmail']));
			$senha = htmlspecialchars(addslashes($_POST['loginSenha']));
			
			if($user->login($email, $senha)){
				die(json_encode(['codigo' => 1]));
			}else{
				die(json_encode(['codigo' => 0]));
			}
		}
		$this->loadTemplate('login');
	}
}