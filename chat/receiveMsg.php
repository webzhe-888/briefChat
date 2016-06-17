<?php	
	include "dbConnect.php";
	//拿到数据库，在$conn里面
	$conn = initDataBase();
	$username = $_GET["name"];
	//chatTable
	$sql = "select * from chatTable order by time";
//	$handle = fopen("myUser.txt", "r");
//	$username = fgets($handle);
//	fclose($handle);
	$result = mysqli_query($conn, $sql);
	while ($row = $result -> fetch_assoc()) {
	//把数据放到数组中返回
		$time = substr($row["time"], -8);
		if($username == $row["name"]){	
			echo "<ul><li id='positionRight'><p>" . $row["name"] . "&nbsp;&nbsp;" . $time . "</p>
			<p><span id='spanId'>" . $row["msg"] . "</span></p></li></ul>";
		}else{
			echo "<ul><li id='positionLeft'><p>" . $row["name"] . "&nbsp;&nbsp;" . $time . "</p>
			<p><span id='spanId'>" . $row["msg"] . "</span></p></li></ul>";
		}
	}
//	$msg = "<table>";
//	while ($row = mysqli_fetch_array($result)) {
//		//截取时间
//		$myDate = $row["time"];
//		$showDate = substr($myDate, 10);
//		//把数据放到数组中返回
//		$msg = $msg."<tr>
//		<td>".$row["name"]."</td>
//		<td>".$showDate."</td>
//		<td><br>".$row["msg"]."</td>
//		</tr>";
//	}
//	//php无法把数组传过去，只能通过字符串
//	echo $msg."</table>";
?>
