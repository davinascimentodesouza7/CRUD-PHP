<?php

if(isset($_POST['id'])){
	$id = $_POST['id'];
} else{
	$id = 0;
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
} else{
	$id = 0;
}

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
} else{
	$nome = "";
}

if(isset($_POST['sexo'])){
	$sexo = $_POST['sexo'];
} else{
	$sexo = "";
}

if(isset($_POST['cidade'])){
	$cidade = $_POST['cidade'];
} else{
	$cidade = "";
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
} else{
	$acao = "";
}


