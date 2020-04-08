$(document).ready(function() {
	$("#formCadastro").on('submit', function(event){
		event.preventDefault();
		var dados = $ (this).serialize();

		$.ajax({
			url: 'Controllers/ControllerCadastro.php',
			type: 'post',
			dataType: 'html',
			data: dados,
			success: function(dados){
				$('.resultado').show().html(dados);
			} 
		});
	});
});

/* confirmar antes de deletar o dado */
$(document).ready(function() {
	$('.deletar').on('click', function(event){
		event.preventDefault();

		var link = $(this).attr('href');
		
		if(confirm("Deseja mesmo apagar esse dado?")){
			window.location.href=link;
		}else{
			return false;
		}	
	});
});
