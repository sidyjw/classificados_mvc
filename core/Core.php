<?php 

class Core{
	function run(){
		$url = '/';
		$params = [];

		if(!empty($_GET['url'])){
			$url = explode('/', $_GET['url']);

			if(!empty($url) && $url[0] !== '/'){
				$currentController = $url[0] . 'Controller';
				array_shift($url);
			}else{
				$currentController = 'homeController';
			}

			if(!empty($url) && $url[0] !== ''){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
			}

			if(!file_exists("controllers/{$currentController}.php") || !method_exists($currentController, $currentAction)){
				die("Pagina não encontrada");
			}
		}else{
			$currentController = 'homeController';
			$currentAction = "index";
		}
		$c = new $currentController();
		call_user_func_array([$c, $currentAction], $params);

		// echo "CONTROLLER = {$currentController} <br> ACTION = {$currentAction} <br> PARAMS = " . print_r($params, true);
	}
}