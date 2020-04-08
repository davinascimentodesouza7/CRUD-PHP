/*$.("#formCadastro").on('submit', function(event){
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
	}) 
})*/

 $('#formCadastro').on('submit',function(event){
  event.preventDefault();
  var Dados=$(this).serialize();
  
  $.ajax({
   url: 'Controllers/cadastro.php',
   type: 'post',
   dataType: 'html',
   data: Dados,
   success:function(Dados){
    $('.resultado').show().html(Dados);
   }
  });
