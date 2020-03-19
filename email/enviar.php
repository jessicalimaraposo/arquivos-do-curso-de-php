<?php 
session_start();

//Recebe o valor digitado no campo nome
$usuario = $_POST ["nome"];

//Verificar se o usuario preencheu o campo
if(empty($nome)){
	echo "Erro é necessário preencher o formulário";
	$_SESSION ["erroCampoNome"];
	header("Location: form.php");
}

//Verificar existencia d variavél
if(isset($_POST ["nome"])){
	echo "Variável existe";
		
		if(empty($_POST ["nome"])){
			echo "Campo preenchido";
	}
}
?>