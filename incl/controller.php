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
			
			//show details of rendered text if available
			function get_txt(){
				$rtxt = isset($_GET['input']) ? true : false;
				if($rtxt){
					return $_GET['input'];
				} else {
					return 'rendered text will display here';
				}
			}
			$show_details = get_txt();
?>
