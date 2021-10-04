<?php
	class projectController{
		public function index(){
			$projectList = project::getAllProjectApprove();
			require_once('views/project/index_project.php');
		}
	}

?>