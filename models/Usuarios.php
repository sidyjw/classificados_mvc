<?php 
class Usuarios extends model{
	public function cadastro($nome, $email, $senha){
		if(!$this->emailExiste($email)){
			$sql = $this->db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);

			if($sql->execute()){
				die(json_encode(['codigo' => 1]));
			}else{
				die(json_encode(['codigo' => 0]));
			}

		}else{
			die(json_encode(['codigo' => 2]));
		}
	}
	
	public function login($email , $senha){
		$sql= $this->db->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);

		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			$_SESSION['id'] = $dados['id'];
			$_SESSION['login'] = true;
			return true;
		}else{
			return false;
		}
	}

	public function emailExiste($email){
		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
}