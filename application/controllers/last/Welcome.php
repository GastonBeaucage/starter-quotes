<?php

class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
                $this->data['pagebody'] = 'justone';          
                $record = $this->quotes->last();
                $this->data['who'] = $record['who'];
                $this->data['mug'] = $record['mug'];
                $this->data['what'] = $record['what'];

		$this->render();

	}

}

