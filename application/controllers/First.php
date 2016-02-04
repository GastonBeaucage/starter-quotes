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
            $source = $this->quotes->get(1);
            $this->data['who'] = $source['who'];
            $this->data['what']= $source['what'];
            $this->data['mug']= $source['mug'];
            $this->render();
        }
        
        function gimme($id){
            $this->data['pagebody'] = 'justone';
            $source = $this->quotes->get($id);
            $this->data['who'] = $source['who'];
            $this->data['what']= $source['what'];
            $this->data['mug']= $source['mug']; 
            $this->render();
        }
}