<?php
include("Conexao.php");

class Crud extends Conexao {

	#atributos
	private $crud;
	private $contador;


	#preparação das declarativas
	private function preparedStatements($query, $parametros){
		$this->countParametros($parametros);
		$this->crud=$this->conectaDB()->prepare($query);
		
		if($this->contador > 0){
			for($i = 1; $i <= $this->contador; $i++){
				$this->crud->bindValue($i, $parametros[$i-1]);
			}
		}

		$this->crud->execute();
	}


	#contador de parametros
	private function countParametros($parametros){
		$this->contador=count($parametros);
	}

	#inserção no banco de dados
	public function insertDB($tabela, $condicao, $parametros){
		$this->preparedStatements("insert into {$tabela} values ({$condicao})", $parametros);
		return $this->crud;
	}

	#seleção no banco de dados
	public function selectDB($campos, $tabela, $condicao, $parametros){
		$this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $parametros);
		return $this->crud;
	}

	#deletar dados no db
	public function deleteDB($tabela, $condicao, $parametros){
		$this->preparedStatements("delete from {$tabela} where {$condicao}", $parametros);
		return $this->crud;
	}

	#atualização no banco de dados
	public function updateDB($tabela, $set, $condicao, $parametros){
		$this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $parametros);
		return $this->crud;
	}
}