<?php

class ContatosController extends AppController {

	public $uses = array(); // Não utiliza nenhum model
	
	public function enviar() {
		// Envia a mensagem ou salva os dados no banco
		// $this->data() contém os campos enviados pelo formulário
		
		$this->set('data', $this->data);
	}
	
}
