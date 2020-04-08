<?php include("includes/Header.php"); ?> 
<?php include("Class/Crud.php"); ?> 

	<div class="content">
		<?php
			$crud = new Crud();
			$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

			$bFetch = $crud->selectDB(
				"*",
				"cadastro",
				"where id=?",
				array($idUser)
			);

			$fetch = $bFetch->fetch(PDO:: FETCH_ASSOC);
		?>

		<h1>Dados do Usuário</h1>
		<hr>
		<strong>Nome: </strong><?php echo $fetch['nome'] ?><br>
		<strong>Sexo: </strong><?php echo $fetch['sexo'] ?><br>
		<strong>Cidade: </strong><?php echo $fetch['cidade'] ?><br>
	</div>
	
<?php include("includes/Footer.php"); ?> 