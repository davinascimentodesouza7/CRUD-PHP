<?php include("includes/Header.php"); ?> 
<?php include("Class/crud.php"); ?> 

<div class="content">
	<table class="tableCrud">
		<tr>
			<td>Nome</td>
			<td>Sexo</td>
			<td>Cidade</td>
			<td>Ações</td>
		</tr>

		<!-- estrutura de loop -->
		<?php
			$crud = new Crud();
			$bFetch = $crud->selectDB(
				"*",
				"cadastro",
				"",
				array()
			);

			while($fetch = $bFetch->fetch(PDO::FETCH_ASSOC)){
		?>

			<tr>
				<td><?php echo $fetch['nome'] ?></td>
				<td><?php echo $fetch['sexo'] ?></td>
				<td><?php echo $fetch['cidade'] ?></td>
				<td>
					<a href="<?php echo "visualizar.php?id={$fetch['id']}"; ?>">
					<i class="fa fa-search icon-link"></i></a>

					<a href="<?php echo "cadastro.php?id={$fetch['id']}"; ?>">
					<i class="fa fa-edit icon-link"></i></a>
					
					<a class="deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$fetch['id']}";?>">
					<i class="fa fa-trash icon-link"></i></a>
				</td>
			</tr>

		<?php
			}
		?>		
	</table>
</div>
	
<?php include("includes/Footer.php"); ?> 