<?php
	function randomize() {
		$ganjil = '';
		for ($i=1; $i<=10 ; $i++) { 
			if ($i % 2 == 1) {
				$ganjil .= $i.'';
			}
		}
		return $ganjil;
	}

	echo randomize(6);
?>