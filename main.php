<?php
	$serverName = "localhost";
	$username = "root";//linux数据库名称
	$password = "123456";//数据库密码
	$dbname = "root";//自己创建的数据库名

// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
	if ($conn->connect_error) {
    	die("连接失败: " . $conn->connect_error);
	} 

	if($_POST['submit']){
		$user= $_POST['user'];//html表单传过来的数据
		$passwordv = $_POST["password"];
		$sql = "insert into user(username,password) values ('$name','$password')";//into 后面是表名，接下来是字段，最后是值
	}
	else{
		exit(0);
	}

	if ($conn->query($sql) === TRUE) {
		echo "注册成功";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
