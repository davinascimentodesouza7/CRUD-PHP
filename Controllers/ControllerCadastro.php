<?php
include("../includes/variaveis.php");
include("../Class/Crud.php");

$crud = new Crud();

if($acao == 'Cadastrar'){
	$crud->insertDB(
	"cadastro",
	"?,?,?,?",
	array(
		$id,
		$nome,
		$sexo,
		$cidade
	)
  	);

	echo "Cadastro realizado com sucesso!";

}else{
	$crud->updateDB(
		"cadastro",
		"nome=?, sexo=?, cidade=?",
		"id=?",
		array(
			$nome,
			$sexo,
			$cidade,
			$id
		)
	);
}

echo "";