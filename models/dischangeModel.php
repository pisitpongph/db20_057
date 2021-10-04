<?php
    class Menu{
        
        public $idTamSang;
        public $idMenu;
        public $MenuName;
        public $Price;
        public $detail;

        public function __construct($idTamSang,$idMenu,$MenuName,$Price,$detail){
            $this->idTamSang = $idTamSang;
            $this->idMenu = $idMenu;
            $this->MenuName = $MenuName;
            $this->Price = $Price;
            $this->detail = $detail;
        }

        public static function Add($idTamSang,$idMenu,$MenuName,$Price,$detail){
            require("connection_connect.php");
            $sql = "insert into menu (idTamSang,idMenu,MenuName,Price,detail) 
                    values ('$idTamSang','$idMenu','$MenuName','$Price','$detail')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function getAll(){
            $MenuList = [];
            require("connection_connect.php");
            $sql = "select * from tamsang,menu where menu.idTamSang = tamsang.idTamSang";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $idTamSang = $my_row["idTamSang"];
                $idMenu = $my_row["idMenu"];
                $MenuName = $my_row["MenuName"];
                $Price = $my_row["Price"];
                $detail = $my_row["detail"];
                $MenuList[] = new Menu($idTamSang,$idMenu,$MenuName,$Price,$detail);
            }
            require("connection_close.php");
            return $MenuList;
        }
        public static function search($key){
            $MenuList = [];
            require("connection_connect.php");
            $sql = "select * from tamsang,menu where(idMenu like '%$key%' or MenuName like '%$key%'
                    or Price like '%$key%' or detail like '%$key%') AND tamsang.idTamSang = menu.idTamSang";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $idTamSang = $my_row["idTamSang"];
                $idMenu = $my_row["idMenu"];
                $MenuName = $my_row["MenuName"];
                $Price = $my_row["Price"];
                $detail = $my_row["detail"];
                $MenuList[] = new Menu($idTamSang,$idMenu,$MenuName,$Price,$detail);
            }
            require("connection_close.php");
            return $MenuList;
        }
        public static function get($idMenu){
            require("connection_connect.php");
            $sql = "select * from tamsang,menu where idMenu = '$idMenu' and menu.idTamSang = tamsang.idTamSang";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $idTamSang = $my_row["idTamSang"];
            $idMenu = $my_row["idMenu"];
            $MenuName = $my_row["MenuName"];
            $Price = $my_row["Price"];
            $detail = $my_row["detail"];
            require("connection_close.php");
            echo"$idTamSang,$idMenu,$MenuName,$Price,$detail";
            return new Menu($idTamSang,$idMenu,$MenuName,$Price,$detail);
        }
        public static function update($idTamSang,$idMenu,$MenuName,$Price,$detail){
            echo $idTamSang;
            echo $idMenu;
            require("connection_connect.php");
            $sql = "UPDATE menu SET idTamSang='$idTamSang',MenuName='$MenuName',
                    Price='$Price',detail='$detail' WHERE idMenu = '$idMenu'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($idMenu){
            require("connection_connect.php");
            $sql = "DELETE from menu Where idMenu = '$idMenu'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
 ?>
