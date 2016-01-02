<?php
class myclass{
	protected function ourname(){
	$name = "My name is Md ariful islam";
	$uname = "You are Md nurjaman hussain";
	echo $name. " <br>" . $uname;
	}
}
class youclass extends myclass{
	public function getprotected(){
		return $this ->ourname();
	}
}
$obj = new youclass;
$obj ->getprotected();
?>