<?php

class MyClass
{
	protected $wertA = 5;
	protected $wertB = 2;
	
	public function __construct(){
		$this->wertB = 25;
	}	
	
	public function setWertA($a)
	{
		$this->wertA = $a;
		
		$this->
		
		return $this;
	}
	
	public function run()
	{
		try{
			for($i = 0; $i < 10; $i++)
			{
				$myTest = $this->wertA + $i;
				echo $myTest.'<br>';
			}
			
			return $this;
		}
		catch(\Throwable $e)
		{
			echo 'Fehler';
		}
	}
}

$myTestObj = new myClass();

$myTestObj->setWertA(11)->run();

?>