<?php
Class Days {
	public function Monday() {
		echo 'I\m sleeping';
	}

	public function Tuesday() {
		echo 'Wake up and start coding real stuff :)';
	}
}
//test goes to master
$days = new Days;
$days->Tuesday();

for ($i=0;$i<10;$i++) {
    echo '<p>I hate monday!</p>';
}
?>
