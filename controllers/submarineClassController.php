<?php
	class submarineClassController{
		public function index(){
            $submarineClassList = submarineClass::getAll();
			require_once('views/submarineClass/index_submarineClass.php');
		}
		public function newSubmarineClass(){
			
			require_once('views/submarineClass/new_submarineClass.php');
		}

		public function addSubmarineClass(){
			$classID = $_GET["classID"];
			$className = $_GET["className"];
			$detail = $_GET["detail"];
			submarineClass::Add($classID,$className,$detail);
			submarineClassController::index();
		}

		public function search(){
			$key = $_GET['key'];
			$submarineClassList = submarineClass::search($key);
			require_once('views/submarineClass/index_submarineClass.php');
		}

		public function updateForm(){
			$classID = $_GET['classID'];
			$submarineClass = submarineClass::get($classID);
			require_once('views/submarineClass/updateForm.php');
		}

		public function update(){
			$classID = $_GET["classID"];
			$className = $_GET["className"];
			$detail = $_GET["detail"];
			submarineClass::update($classID,$className,$detail);
			submarineClassController::index();
		}

		public function deleteConfirm(){
			$classID = $_GET['classID'];
			$submarineClass = submarineCLass::get($classID);
			require_once('views/submarineClass/deleteConfirm.php');
		}

		public function delete(){
			$classID = $_GET['classID'];
			submarineClass::delete($classID);
			submarineClassController::index();
		}
	}

?>