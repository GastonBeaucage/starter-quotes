<?php

class First extends Application {

	function __construct()
	{
		parent::__construct();
	}


	function index()
	{
                $this->data['pagebody'] = 'justone';
            
                $record = $this->quotes->first();
                $this->data['who'] = $record['who'];
                $this->data['mug'] = $record['mug'];
                $this->data['what'] = $record['what'];

		$this->render();

	}
        
        function zzz(){
            
            $this->data['pagebody'] = 'justone';
            $this->render();
        }
        
        function gimme($id){
            
        }
}