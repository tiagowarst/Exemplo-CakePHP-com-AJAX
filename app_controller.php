<?php

class AppController extends Controller {
	
	public $components = array('RequestHandler');
	
	public function beforeFilter() {
		if ($this->RequestHandler->isAjax()) {
			$this->layout = 'ajax';
		}
	}	
	
}
