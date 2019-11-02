<?php
	$a = array(['cat', 'listen', 'code', 'act', 'silent', 'tac']);
	$pattern = '/\b[a-zA-Z]\b//';
	function findSame() {
		if(preg_match($pattern, $a)) {
			echo 'Ada';
		} else {
			echo 'Tidak ditemukan';
		}
	}
?>