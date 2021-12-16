<?php
	
	$conn=  mysqli_connect('localhost','root','123456','main');

	mysqli_query($conn , "set names utf8");
	$sql = 'SELECT * FROM `main`.`user` LIMIT 0,1000';
	$query= mysqli_query($conn,$sql);
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	while ($row=mysqli_fetch_assoc($query)){
		if($row["username"] == $username && $row["password"] == $password){
			echo "登录成功";
			mysqli_close($conn);
			$id = $row["id"];
			echo "<script>window.open('./$id/main.html','_self');</script>";
		}
	}
	echo "登录失败";
	

?>