<?php
    class submarineGeneration{
        
        public $classID;
        public $generationID;
        public $generationName;
        public $width;
        public $length;
        public $hight;
        public $surfaceSpeed;
        public $drivingSpeed;
        public $operationRound;
        public $crew;
        public $companyID;
        public $price;

        public function __construct($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price){
            $this-> classID = $classID;
            $this-> generationID = $generationID;
            $this-> generationName = $generationName;
            $this-> width = $width;
            $this-> length = $length;
            $this-> hight = $hight;
            $this-> surfaceSpeed = $surfaceSpeed;
            $this-> drivingSpeed = $drivingSpeed;
            $this-> operationRound = $operationRound;
            $this-> crew = $crew;
            $this-> companyID = $companyID;
            $this-> price = $price;
        }
        public static function getAll(){
            $submarineGenerationList = [];
            require("connection_connect.php");
            $sql = "select * from submarinegeneration";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $classID = $my_row["classID"];
                $generationID = $my_row["generationID"];
                $generationName = $my_row["generationName"];
                $width = $my_row["width"];
                $length =  $my_row["length"];
                $hight = $my_row["hight"];
                $surfaceSpeed = $my_row["surfaceSpeed"];
                $drivingSpeed = $my_row["drivingSpeed"];
                $operationRound = $my_row["operationRound"];
                $crew = $my_row["crew"];
                $companyID = $my_row["companyID"];
                $price = $my_row["price"];
                $submarineGenerationList[] = new submarineGeneration($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price);
              
            }
            require("connection_close.php");
          
            return $submarineGenerationList;
        }
        public static function Add($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price){
            
            require("connection_connect.php");
            $sql = "insert into submarinegeneration (classID,generationID,generationName,width,length,hight,surfaceSpeed,drivingSpeed,operationRound,crew,companyID,price) 
                    values ('$classID','$generationID','$generationName','$width','$length','$hight','$surfaceSpeed','$drivingSpeed','$operationRound','$crew','$companyID','$price')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

      
        public static function search($key){
            $submarineGenerationList = [];
            require("connection_connect.php");
            $sql = "select * from submarinegeneration where(classID like '%$key%' or generationID like '%$key%' or generationName like '%$key%' or width like '%$key%' or length like '%$key%' 
                    or hight like '%$key%' or surfaceSpeed like '%$key%' or drivingSpeed like '%$key%' or operationRound like '%$key%' 
                    or crew like '%$key%' or companyID like '%$key%' or price like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $classID = $my_row["classID"];
                $generationID = $my_row["generationID"];
                $generationName = $my_row["generationName"];
                $width = $my_row["width"];
                $length =  $my_row["length"];
                $hight = $my_row["hight"];
                $surfaceSpeed = $my_row["surfaceSpeed"];
                $drivingSpeed = $my_row["drivingSpeed"];
                $operationRound = $my_row["operationRound"];
                $crew = $my_row["crew"];
                $companyID = $my_row["companyID"];
                $price = $my_row["price"];
                $submarineGenerationList[] = new submarineGeneration($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price);
            }
            require("connection_close.php");
            return $submarineGenerationList;
        }
        public static function get($generationID){
            require("connection_connect.php");
            $sql = "select * from submarinegeneration where generationID = '$generationID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
                $classID = $my_row["classID"];
                $generationID = $my_row["generationID"];
                $generationName = $my_row["generationName"];
                $width = $my_row["width"];
                $length =  $my_row["length"];
                $hight = $my_row["hight"];
                $surfaceSpeed = $my_row["surfaceSpeed"];
                $drivingSpeed = $my_row["drivingSpeed"];
                $operationRound = $my_row["operationRound"];
                $crew = $my_row["crew"];
                $companyID = $my_row["companyID"];
                $price = $my_row["price"];
            require("connection_close.php");
            return new submarineGeneration($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price);
        }
        public static function update($classID,$generationID,$generationName,$width,$length,$hight,$surfaceSpeed,$drivingSpeed,$operationRound,$crew,$companyID,$price){
            
            require("connection_connect.php");
            $sql = "UPDATE submarinegeneration SET classID = '$classID',generationName = '$generationName',width='$width',
                    length='$length',hight='$hight',surfaceSpeed='$surfaceSpeed'
                    ,drivingSpeed='$drivingSpeed',operationRound='$operationRound',crew='$crew',companyID='$companyID' ,price = '$price' WHERE generationID = '$generationID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($generationID){
            require("connection_connect.php");
            $sql = "DELETE from submarinegeneration Where generationID = '$generationID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
 ?>
