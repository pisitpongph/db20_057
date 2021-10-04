<?php
	class companyController{
		public function index(){
            		$companyList = company::getAll();
			require_once('views/company/index_company.php');
		}
		public function newCompany(){
			$countryList = country::getAll();
			require_once('views/company/new_company.php');
		}

		public function addCompany(){
			$companyID = $_GET["companyID"];
			$companyName = $_GET["companyName"];
			$countryID = $_GET["countryID"];
			company::Add($companyID,$companyName,$countryID);
			companyController::index();
		}

		public function search(){
			$key = $_GET['key'];
			$companyList = company::search($key);
			require_once('views/company/index_company.php');
		}

		public function updateForm(){
			$companyID = $_GET['companyID'];
			$company = company::get($companyID);
			$countryList = country::getAll();
			require_once('views/company/updateForm.php');
		}

		public function update(){
			$companyID = $_GET["companyID"];
			$companyName = $_GET["companyName"];
			$countryID = $_GET["countryID"];
			company::update($companyID,$companyName,$countryID);
			companyController::index();
		}

		public function deleteConfirm(){
			$companyID = $_GET['companyID'];
			$company = company::get($companyID);
			require_once('views/company/deleteConfirm.php');
		}

		public function delete(){
			$companyID = $_GET['companyID'];
			company::delete($companyID);
			companyController::index();
		}
	}

?>