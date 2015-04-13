<?php
Class Days {
	public function Monday() {
		echo 'I\m sleeping';
	}

	public function Tuesday() {
		echo 'Wake up and start coding real stuff :)';
	}
}
//test
$days = new Days;
$days->Tuesday();
?>
