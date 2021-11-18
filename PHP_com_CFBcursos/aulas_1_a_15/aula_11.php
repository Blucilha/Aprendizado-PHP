<?php
	//	BREAK
	$arr = ["teclado", "monitor", "mouse", "gabinete", "sair", "webCam"];
	
		foreach($arr as $item) {
			if ($item == "sair") {
				break;
			} else {
				echo $item."<br/>";
			}
		}
	
?>
