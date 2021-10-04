<?php
    class submarine{
        
        public $submarineID;
        public $countryID;
        public $submarineName;
        public $generationID;
        public $submarineStatusID;
        public $stationDate;

        public function __construct($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate){
            $this-> submarineID = $submarineID;
            $this-> countryID = $countryID;
            $this-> submarineName = $submarineName;
            $this-> generationID = $generationID;
            $this-> submarineStatusID = $submarineStatusID;
            $this-> stationDate = $stationDate;
        }

        public static function Add($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate){
            require("connection_connect.php");
            $sql = "INSERT INTO submarine (submarineID,countryID,submarineName,generationID,submarineStatusID,stationDate) 
                    VALUES ('$submarineID','$countryID','$submarineName','$generationID','$submarineStatusID','$stationDate')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }
       

        public static function getAll(){
            $submarineList = [];
            require("connection_connect.php");
            $sql = "select * from submarine";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $submarineID = $my_row["submarineID"];
                $countryID = $my_row["countryID"];
                $submarineName = $my_row["submarineName"];
                $generationID = $my_row["generationID"];
                $submarineStatusID = $my_row["submarineStatusID"];
                $stationDate = $my_row["stationDate"];
                $submarineList[] = new submarine($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate);
            }
            require("connection_close.php");
            return $submarineList;
        }
        public static function search($key){
            $submarineList = [];
            require("connection_connect.php");
            $sql = "select * from submarine where(submarineID like '%$key%' or countryID like '%$key%' or submarineName like '%$key%'
                    or generationID like '%$key%' or submarineStatusID like '%$key%' or stationDate like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $submarineID = $my_row["submarineID"];
                $countryID = $my_row["countryID"];
                $submarineName = $my_row["submarineName"];
                $generationID = $my_row["generationID"];
                $submarineStatusID = $my_row["submarineStatusID"];
                $stationDate = $my_row["stationDate"];
                $submarineList[] = new submarine($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate);
            }
            require("connection_close.php");
            return $submarineList;
        }
        public static function get($submarineID){
            require("connection_connect.php");
            $sql = "select * from submarine where submarineID = '$submarineID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $submarineID = $my_row["submarineID"];
            $countryID = $my_row["countryID"];
            $submarineName = $my_row["submarineName"];
            $generationID = $my_row["generationID"];
            $submarineStatusID = $my_row["submarineStatusID"];
            $stationDate = $my_row["stationDate"];
            require("connection_close.php");
            return new submarine($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate);
        }
        public static function update($submarineID,$countryID,$submarineName,$generationID,$submarineStatusID,$stationDate){
            require("connection_connect.php");
            $sql = "UPDATE submarine SET countryID='$countryID',submarineName='$submarineName',
                    generationID='$generationID'
                    ,submarineStatusID='$submarineStatusID',stationDate='$stationDate' WHERE submarineID = '$submarineID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($submarineID){
            require("connection_connect.php");
            $sql = "DELETE from submarine Where submarineID = '$submarineID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
 ?>
