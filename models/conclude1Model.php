
<?php
    class conclude1{
        
        public $submarineName;
        public $className;
        public $generationName;
        public $companyName;
        public $countryName;
        public $statusName;
        public $stationDate;
 
     
        public function __construct($submarineName,$className,$generationName,$companyName,$countryName,$statusName,$stationDate){
            $this->submarineName = $submarineName;
            $this->className = $className;
            $this->generationName = $generationName;
            $this->companyName = $companyName;
            $this->countryName = $countryName;
            $this->statusName = $statusName;
            $this->stationDate = $stationDate;
        }

        public static function conclude1(){
            $concludeList = [];
            require("connection_connect.php");
            $sql = "SELECT submarine.submarineName, submarineclass.className,submarinegeneration.generationName,company.companyName,country.countryName,submarinestatus.statusName,submarine.stationDate
            FROM submarine LEFT JOIN submarinegeneration on submarine.generationID = submarinegeneration.generationID 
            LEFT JOIN submarineclass on submarineclass.classID  = submarinegeneration.classID 
            LEFT JOIN company on company.companyID = submarinegeneration.companyID
            LEFT JOIN country on country.countryID = submarine.countryID
            LEFT JOIN submarinestatus on submarinestatus.submarineStatusID = submarine.submarineStatusID
            ORDER BY submarine.submarineName";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $submarineName = $my_row["submarineName"];
                $className = $my_row["className"];
                $generationName = $my_row["generationName"];
                $companyName = $my_row["companyName"];
                $countryName = $my_row["countryName"];
                $statusName = $my_row["statusName"];
                $stationDate = $my_row["stationDate"];
                $concludeList[] = new conclude1($submarineName,$className,$generationName,$companyName,$countryName,$statusName,$stationDate);
            }
            require("connection_close.php");
            return $concludeList;
        }
    }
 ?>
