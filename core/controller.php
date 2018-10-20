<?php
class controller{
	public function loadView($viewName, $viewData = []){
		extract($viewData);
		require "views/{$viewName}.php";
	}
	public function loadTemplate($viewName, $viewData = []){
		require "views/template.php";
	}
}