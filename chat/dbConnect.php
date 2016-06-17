<?php
//初始化数据库
function initDataBase(){
	$conn = new mysqli("localhost","root","apRqLvdp4JHFF4SZ");
	if($conn->connect_error){
		echo "false";
	}else{
		//创建数据库
		$sql = "create database myChatDB CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'";
		if($conn->query($sql) === true){
			//创建表
			$sql = "create table chatTable (id int(4) unsigned auto_increment primary key,name varchar(10) not null,msg varchar(100),time timestamp) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$conn = new mysqli("localhost", "root","apRqLvdp4JHFF4SZ","myChatDB");
			if($conn->query($sql) === true){
				echo "true";
			}else{
//				echo "false";
			}
		}else{
//			echo "false";
		}
	}
	$conn = new mysqli("localhost", "root","apRqLvdp4JHFF4SZ","myChatDB");
	$conn->query("set NAMES utf8");
	return $conn;
}	
//initDataBase();
?>	