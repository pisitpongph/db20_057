<?php
    class submarineClass{
        
        public $classID;
        public $className;
        public $detail;
     
        public function __construct($classID,$className,$detail){
            $this->classID = $classID;
            $this->className = $className;
            $this->detail = $detail;
        }

        public static function Add($classID,$className,$detail){
            require("connection_connect.php");
            $sql = "insert into submarineclass (classID,className,detail) 
                    values ('$classID','$className','$detail')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function getAll(){
            $submarineClassList = [];
            require("connection_connect.php");
            $sql = "select * from submarineclass";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $classID = $my_row["classID"];
                $className = $my_row["className"];
                $detail = $my_row["detail"];
                $submarineClassList[] = new submarineClass($classID,$className,$detail);
            }
            require("connection_close.php");
            return $submarineClassList;
        }
        public static function search($key){
            $submarineClassList = [];
            require("connection_connect.php");
            $sql = "select * from submarineclass where(classID like '%$key%' or className like '%$key%'
             or detail like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $classID = $my_row["classID"];
                $className = $my_row["className"];
                $detail = $my_row["detail"];
                $submarineClassList[] = new submarineClass($classID,$className,$detail);
            }
            require("connection_close.php");
            return $submarineClassList;
        }
        public static function get($classID){
            require("connection_connect.php");
            $sql = "select * from submarineclass where classID = '$classID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $classID = $my_row["classID"];
            $className = $my_row["className"];
            $detail = $my_row["detail"];
            require("connection_close.php");
            return new submarineClass($classID,$className,$detail);
        }

        public static function update($classID,$className,$detail){
            require("connection_connect.php");
            $sql = "UPDATE submarineclass SET className='$className' , detail = '$detail' WHERE classID = '$classID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($classID){
            require("connection_connect.php");
            $sql = "DELETE from submarineclass Where classID = '$classID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
 ?>
