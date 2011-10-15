$(document).ready(function() {
	
	// Carrega as páginas do menu na DIV de destino
	$('#menu a').click(function(e) {
		e.preventDefault();
		
		$('#content').load(this.href);
	});
	
	// Envio do formulário de contato
	// ... usamos o live() pois o elemento foi carregado por AJAX
	$('#ContatoEnviarForm').live('submit', function() {
		var data = $(this).serialize(),
			url = $(this).attr('action');
		
		$.post(url, data, function(retorno) {
			$('#content').html(retorno);
		});
		
	
		return false;
	});
	
});
