<?php
	function ganti_kata($kalimat, $search, $replace) {
		$pisah = explode($search, $kalimat);
		$new_str = implode($replace, $pisah);
		return $new_str;
	}
	echo ganti_kata('yogyakarta', 'y', 'j');
?>