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
		if($user && $password){
			$sql = "select * from user where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
				$result = mysql_query($sql);//执行sql
				$rows=mysql_num_rows($result);//返回一个数值
				if($rows){//0 false 1 true
					header("refresh:0;url=welcome.html");//如果成功跳转至welcome.html页面
					exit;
				}else{
					echo "用户名或密码错误";
					echo "
						<script>
								setTimeout(function(){window.location.href='login.html';},1000);
						</script>

					";//如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
				}
		}
		else{//如果用户名或密码有空
					echo "表单填写不完整";
					echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";
                        //如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
		}

	}
	else{
		exit;
	}

	$conn->close();
?>
