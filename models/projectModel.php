
<?php
    class project{
        
        public $projectName;
        public $countryName;
        public $generationName;
  
        public function __construct($projectName,$countryName,$generationName){
            $this->projectName = $projectName;
            $this->countryName = $countryName;
            $this->generationName = $generationName;
        }

        public static function getAllProjectApprove(){
            $projectList = [];
            require("connection_connect.php");
            $sql = "SELECT project.projectName,country.countryName,submarinegeneration.generationName
            FROM project LEFT JOIN projectdetail on project.projectID = projectdetail.projectID
            LEFT JOIN country ON country.countryID = project.countryID
            LEFT JOIN submarinegeneration on submarinegeneration.generationID = projectdetail.generationID
            WHERE project.statusID = 'status01'
            ";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $projectName = $my_row["projectName"];
                $countryName = $my_row["countryName"];
                $generationName = $my_row["generationName"];
                $projectList[] = new project($projectName,$countryName,$generationName);
            }
            require("connection_close.php");
            return $projectList;
        }
    }
 ?>
