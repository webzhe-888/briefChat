<?php
//chatTable
include "dbConnect.php";
$conn = initDataBase();
$name = $_POST["name"];
$msg = $_POST["msg"];
//file_put_contents("myUser.txt", $name);
//sql语句中加入变量，可以使用拼接，也可以直接使用单引号,$sql = "insert into chatTable (name , msg) values ('".$name."' , '" . $msg."')";
$sql = "insert into chatTable(name,msg) values('$name','$msg')";
if($conn ->query($sql) === true){
	echo "true";
}else{
	echo "false".$conn->error;
}	
?>