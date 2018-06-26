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
			for($i = 0; $i < 10; $i++)
			{
				$myTest = $this->wertA + $i;
			}
			
			retutn $this;
		}
		catch(\Exception $e)
		{
			echo 'Fehler';
		}
	}
}

$myTestObj = new test();

$myTestObj->setWertA(11)->run();




?>