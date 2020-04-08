<?php

abstract Class Conexao {

	protected function conectaDB(){
		try {
			$con = new PDO("mysql:host=localhost;dbname=crud_php", "root", "1234");
			return $con;
		} catch (PDOException $erro) {
			return $erro->getMessage();
		}
	}

}