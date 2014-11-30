<?php
			//determine defaults before rendering		 	
		 	function get_src(){
		 		$val = isset($_GET['input']) ? true : false;
				if($val){
					return 'incl/qrcode.php?'.'input='.$_GET['input'];
				} else {
					return "asset/img/default_qr.png";
				}
			}
			$qr_render = get_src();
?>
