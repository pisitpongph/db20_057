<?php
	class submarineController{
		public function index(){
            $submarineList = submarine::getAll();
			require_once('views/submarine/index_submarine.php');
		}
		public function newSubmarine(){
			$submarineGenerationList = submarineGeneration::getAll(); 
			$submarineStatusList = submarineStatus::getAll(); 
			$countryList = country::getAll();
			require_once('views/submarine/new_submarine.php');
		}

		public function addSubmarine(){
			$submarineID = $_GET["submarineID"];
			$countryID = $_GET["countryID"];
            $submarineName = $_GET["submarineName"];
            $generationID = $_GET["generationID"];
            $submarineStatusID = $_GET["submarineStatusID"];
            $stationDate = $_GET["stationDate"];
			
			submarine::Add($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate);
			submarineController::index();
		}

		public function search(){
			$key = $_GET['key'];
			$submarineList = submarine::search($key);
			require_once('views/submarine/index_submarine.php');
		}

		public function updateForm(){
			$submarineID = $_GET['submarineID'];
			$submarine = submarine::get($submarineID);
			$submarineGenerationList = submarineGeneration::getAll(); 
			$submarineStatusList = submarineStatus::getAll(); 
			$countryList = country::getAll();
			require_once('views/submarine/updateForm.php');
		}

		public function update(){
			$submarineID = $_GET["submarineID"];
			$countryID = $_GET["countryID"];
            $submarineName = $_GET["submarineName"];
            $generationID = $_GET["generationID"];
            $submarineStatusID = $_GET["submarineStatusID"];
            $stationDate = $_GET["stationDate"];
			submarine::update($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate);
			submarineController::index();
		}

		public function deleteConfirm(){
			$submarineID = $_GET['submarineID'];
			$submarine = submarine::get($submarineID);
			require_once('views/submarine/deleteConfirm.php');
		}

		public function delete(){
			$submarineID = $_GET['submarineID'];
			submarine::delete($submarineID);
			submarineController::index();
		}
	}

?>