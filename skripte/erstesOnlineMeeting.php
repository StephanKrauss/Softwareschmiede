<?php

class test
{
	protected $wertA = NULL;
	protected $wertB = null;
	
	public function __construct(){
		$this->wertB = 25;
	}	
	
	public function setWertA($a)
	{
		$this->wertA = $a;
		
		return $this;
	}
	
	public function run()
	{
		try{
			
			retutn $this;
		}
		catch(\Exception $e)
		{
			echo 'Fehler';
		}
	}
}




?>