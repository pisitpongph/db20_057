<?php
	class submarineGenerationController{
		public function index(){
            $submarineGenerationList = submarineGeneration::getAll();
			require_once('views/submarineGeneration/index_submarineGeneration.php');
		}
		public function newSubmarineGeneration(){
			$companyList = company::getAll();
			$submarineClassList = submarineClass::getAll();
			require_once('views/submarineGeneration/new_submarineGeneration.php');
		}

		public function addSubmarineGeneration(){
			$classID = $_GET["classID"];
			$generationID = $_GET["generationID"];
			$generationName = $_GET["generationName"];
            $width = $_GET["width"];
            $length = $_GET["length"];
            $hight = $_GET["hight"];
            $surfaceSpeed = $_GET["surfaceSpeed"];
            $drivingSpeed = $_GET["drivingSpeed"];
            $operationRound = $_GET["operationRound"];
			$crew = $_GET["crew"];
			$companyID = $_GET["companyID"];
			$price = $_GET["price"];
			submarineGeneration::Add($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price);
			submarineGenerationController::index();
		}

		public function search(){
			$key = $_GET['key'];
			$submarineGenerationList = submarineGeneration::search($key);
			require_once('views/submarineGeneration/index_submarineGeneration.php');
		}

		public function updateForm(){
			$generationID = $_GET['generationID'];
			$submarineGeneration = submarineGeneration::get($generationID);
			$submarineClassList = submarineClass::getAll();
			$companyList = company::getAll();
			require_once('views/submarineGeneration/updateForm.php');
		}

		public function update(){
			$classID = $_GET["classID"];
			$generationID = $_GET["generationID"];
			$generationName = $_GET["generationName"];
            $width = $_GET["width"];
            $length = $_GET["length"];
            $hight = $_GET["hight"];
            $surfaceSpeed = $_GET["surfaceSpeed"];
            $drivingSpeed = $_GET["drivingSpeed"];
            $operationRound = $_GET["operationRound"];
			$crew = $_GET["crew"];
			$companyID = $_GET["companyID"];
			$price = $_GET["price"];
			submarineGeneration::update($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price);
			submarineGenerationController::index();
		}

		public function deleteConfirm(){
			$generationID = $_GET['generationID'];
			$submarineGeneration = submarineGeneration::get($generationID);
			require_once('views/submarineGeneration/deleteConfirm.php');
		}

		public function delete(){
			$generationID = $_GET['generationID'];
			submarineGeneration::delete($generationID);
			submarineGenerationController::index();
		}
	}

?>