<?php 

$dados = [
	'dbname' => 'projeto_classificados_mvc',
	'host' => 'localhost',
	'charset' => 'utf8',
	'user' => 'root',
	'pass' => ''
];


try{
	global $db;
	$db = new PDO("mysql:dbname={$dados['dbname']};host={$dados['host']};charset={$dados['charset']}", $dados['user'], $dados['pass']);
} catch (PDOException $e) {
	die("ERRO: " . $e->getMessage());
}

