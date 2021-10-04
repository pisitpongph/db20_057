
<?php
    class company{
        
        public $companyID;
        public $companyName;
        public $countryID;
     
        public function __construct($companyID,$companyName,$countryID){
            $this->companyID = $companyID;
            $this->companyName = $companyName;
            $this->countryID = $countryID;
        }

        public static function Add($companyID,$companyName,$countryID){
            require("connection_connect.php");
            $sql = "insert into company (companyID,companyName,countryID) 
                    values ('$companyID','$companyName','$countryID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function getAll(){
            $companyList = [];
            require("connection_connect.php");
            $sql = "select * from company";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $companyID = $my_row["companyID"];
                $companyName = $my_row["companyName"];
                $countryID = $my_row["countryID"];
                $companyList[] = new company($companyID,$companyName,$countryID);
            }
            require("connection_close.php");
            return $companyList;
        }


        public static function search($key){
            $companyList = [];
            require("connection_connect.php");
            $sql = "select * from company where(companyID like '%$key%' or companyName like '%$key%'
                    or countryID like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $companyID = $my_row["companyID"];
                $companyName = $my_row["companyName"];
                $countryID = $my_row["countryID"];
                $companyList[] = new company($companyID,$companyName,$countryID);
            }
            require("connection_close.php");
            return $companyList;
        }
        public static function get($companyID){
            require("connection_connect.php");
            $sql = "select * from company where companyID = '$companyID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $companyID = $my_row["companyID"];
            $companyName = $my_row["companyName"];
            $countryID = $my_row["countryID"];
            require("connection_close.php");
            return new company($companyID,$companyName,$countryID);
        }
        public static function update($companyID,$companyName,$countryID){
            require("connection_connect.php");
            $sql = "UPDATE company SET countryID='$countryID',companyName='$companyName' WHERE companyID = '$companyID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($companyID){
            require("connection_connect.php");
            $sql = "DELETE from company Where companyID = '$companyID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
 ?>
