<?php
Class Days {
	public function Monday() {
		echo 'I\m sleeping';
	}

	public function Tuesday() {
		echo 'Wake up and start coding real stuff :)';
	}
}
//now comment to v2 branch
$days = new Days;
$days->Tuesday();
?>
