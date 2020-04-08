<?php
include("../Class/Crud.php");

$crud = new Crud();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deleteDB(
	"cadastro",
	"id=?",
	array(
		$idUser
	)
);

echo "Dado deletado com sucesso!";