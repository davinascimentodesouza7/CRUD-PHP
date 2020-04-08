<?php
	/* Edição de dados */
	if(isset($_GET['id'])){
		$acao = "Editar";

		$crud = new Crud();
		$bFetch = $crud->selectDB("*", "cadastro", "where id=?", array($_GET['id']));
		$fetch = $bFetch->fetch(PDO:: FETCH_ASSOC);
		$id = $fetch['id'];
		$nome = $fetch['nome'];
		$sexo = $fetch['sexo'];
		$cidade = $fetch['cidade'];
	}
	/* Cadastro Novo */
	else{
		$acao = "Cadastrar";
		$id = "";
		$nome = "";
		$sexo = "";
		$cidade = "";
	}
?>

<div class="resultado"></div>

	<div class="formulario">
		<h1 class="center">Cadastro</h1>

		<form name="formCadastro" id="formCadastro" method="post" action="Controllers/ControllerCadastro.php">
			<input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
			<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

			<div class="formularioInput">
				Nome: </br>
				<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
			</div>

			<div class="formularioInput">
				Sexo: </br>
				<select name="sexo" id="sexo">
					<option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>

			<div class="formularioInput">
				Cidade: </br>
				<input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>">
			</div>

			<div class="formularioInput formularioInput100 center">
				<input type="submit" value="<?php echo $acao; ?>">
			</div>
		</form>
	</div>
