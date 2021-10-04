<?php
    class country{
        
        public $countryID;
        public $countryName;
     
        public function __construct($countryID,$countryName){
            $this->countryID = $countryID;
            $this->countryName = $countryName;
        }

        public static function getAll(){
            $countryList = [];
            require("connection_connect.php");
            $sql = "select * from country";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $countryID = $my_row["countryID"];
                $countryName = $my_row["countryName"];
                $countryList[] = new country($countryID,$countryName);
            }
            require("connection_close.php");
            return $countryList;
        }
        
    }
 ?>
