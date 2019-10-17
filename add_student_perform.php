<?php 
    include("connect.php");
	$hoTen = $_POST['hoTen'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$age = $_POST['age'];
	$gioiTinh = $_POST['gioiTinh'];
	$queQuan = $_POST['queQuan'];
	$image = $_FILES["image"]["name"];
	$fileanhtam = $_FILES["image"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'image/'.$image);
	if(!$result) {
		$image=NULL;
	}
	// var_dump($image);
	$sql="INSERT INTO users (hoTen,email,password,age,gioiTinh,queQuan,image) VALUES('$hoTen','$email','$password','$age','$gioiTinh','$queQuan','$image')";
	// var_dump($sql);
	$run = mysqli_query($conn, $sql);
	// var_dump($run);
	if($hoTen == ''|| $email == '' || $password == ''){
		echo '
		<script type="text/javascript">
			alert("Hãy nhập thông tin đầu đủ!!!");
			window.location.href="http://localhost/Profect1/add_student.php";
		</script>';
	}else{
	echo '
		<script type="text/javascript">
			alert("Thêm mới học sinh thành công!!!");
			window.location.href="http://localhost/Profect1/list_student.php";
		</script>';
	}
;?>