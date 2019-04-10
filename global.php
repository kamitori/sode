<?php

	function get_include_contents($filename,$arr) {
		if (is_file($filename)) {
			ob_start();
			foreach ($arr as $key => $value) {
				$$key = $value;
			}
			include $filename;
			return ob_get_clean();
		}
		return false;
	}

?>