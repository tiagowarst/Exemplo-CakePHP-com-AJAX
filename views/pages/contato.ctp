<h2>Página de Contato</h2>
<h3>Carregada em <?php echo date('d/m/Y H:i:s') ?></h3>

<?echo $this->Form->create('Contato', array('action' => 'enviar')) ?>
	<?echo $this->Form->input('nome'); ?>
	<?echo $this->Form->input('email'); ?>
	<?echo $this->Form->input('mensagem', array('type' => 'textarea')); ?>
	<?echo $this->Form->submit('Enviar'); ?>
<?echo $this->Form->end() ?>
