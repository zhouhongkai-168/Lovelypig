<?php
	$conn =  mysqli_connect('localhost','root','123456','main');

	mysqli_query($conn , "set names utf8");
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$id = rand(1000,10000000);

	$sql = "SELECT * FROM `main`.`user` LIMIT 0,1000";
	$query = mysqli_query($conn,$sql);

	while ($row=mysqli_fetch_assoc($query)){
		while($id == $row["id"]){
			$id = rand(1000,10000000);
		}
	}

	echo $id;
	
	$sql = "INSERT INTO `main`.`user`(`username`, `password`,`id`) VALUES ('$username',$password,$id);";
	$query = mysqli_query($conn,$sql);
	if($query){
      echo "插入成功";
	  mkdir("./$id",0700);
	}
    else{
	   echo $conn->error;
    }

	mysqli_close($conn);
?>

