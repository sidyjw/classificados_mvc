<?php
class controller{
	public function loadView($viewName, $viewData = []){
		extract($viewData);
		require "views/{$viewName}.php";
	}
	public function loadTemplate($viewName, $viewData = []){
		extract($viewData);
		require "views/template.php";
	}
	public function loadTemplateCache($viewName, $strTime, $viewData = []){
		$time = strtotime($strTime) - time();
		
		if(file_exists("cache/{$viewName}.cache") && (filemtime("cache/{$viewName}.cache") > time() - $time)){
			require "cache/{$viewName}.cache";
		}else{
			ob_start();
				require "views/template.php";
				$html = ob_get_contents();
			ob_end_clean();

			echo $html;
			
			file_put_contents("cache/{$viewName}.cache", $html);
		}
	}
}