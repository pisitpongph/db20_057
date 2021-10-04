<?php
	class concludeController{
		public function index(){
			$conclude1 = conclude1::conclude1();
			$conclude2 = conclude2::conclude2();
			require_once('views/conclude/index_conclude.php');
		}
	}

?>