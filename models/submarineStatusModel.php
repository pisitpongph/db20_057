<?php
    class submarineStatus{
        
        public $submarineStatusID;
        public $statusName;
  
        public function __construct($submarineStatusID,$statusName){
            $this->submarineStatusID = $submarineStatusID;
            $this->statusName = $statusName;
        }
        public static function getAll(){
            $submarineStatusList = [];
            require("connection_connect.php");
            $sql = "select * from submarinestatus";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $submarineStatusID = $my_row["submarineStatusID"];
                $statusName = $my_row["statusName"];
                $submarineStatusList[] = new submarineStatus($submarineStatusID,$statusName);
            }
            require("connection_close.php");
            return $submarineStatusList;
        }
    }
 ?>
