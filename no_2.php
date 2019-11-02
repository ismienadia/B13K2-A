<?php
	function username_validation($username) {
		if (!preg_match("/^[a-z]{5}+$/", $username)) {
			return false;
		} else {
			return true;
		}
	}

	function password_validation($password) {
		if (!preg_match('/^[0-9]{1,2}+@[A-Z]{4}+$/', $password)) {
			return false;
		} else {
			return true;
		}
	}
?>