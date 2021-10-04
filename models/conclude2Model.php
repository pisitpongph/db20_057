
<?php
    class conclude2{
        
        public $countryID;
        public $amountSubmarineStation;
     
 
     
        public function __construct($countryID,$amountSubmarineStation){
            $this->countryID = $countryID;
            $this->amountSubmarineStation = $amountSubmarineStation;
        
        }

    
        
        public static function conclude2(){
         $concludeList = [];
         require("connection_connect.php");
         $sql = "SELECT submarine.countryID,COUNT(submarine.submarineID)AS amountSubmarineStation
                     FROM submarine 
                     WHERE submarine.submarineStatusID='SS001'
                     GROUP BY submarine.countryID";
         $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
             $countryID = $my_row["countryID"];
             $amountSubmarineStation = $my_row["amountSubmarineStation"];
           
             
             $concludeList[] = new conclude2($countryID,$amountSubmarineStation);
         }
         require("connection_close.php");
         return $concludeList;
     }
 
    }
 ?>
