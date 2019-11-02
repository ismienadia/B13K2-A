<?php
	$nama = 'Ismie Nadia Zulfa';
	$umur = 22;
	
	function biodata($nama, $umur) {
		$bio = array(
			'name' => $nama,
			'age' => $umur,
			'address' => 'Perum. Taman Aster Blok H6 No.12A Cikarang Barat, Bekasi',
			'hobbies' => [
				'Drawing', 
				'Listening Music'
			],
			'is_married' => false,
			'list_school' => [
				'name' => 'Telkom University',
				'year_in_year' => '2016-2019',
				'major' => 'D3 Information System'
			],
			'skills' => [
				'skill_name' => 'English',
				'level' => 'Advanced'
			],
			'interest_incoding' => true
		);
		return json_encode($bio);
	}
	echo biodata($nama, $umur);
?>