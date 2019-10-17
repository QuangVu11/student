<?php 
include("connect.php");
	$id = $_POST['id'];
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
	if($id == '' || $hoTen =='' || $email == '' || $password =='' || $age =='' || $gioiTinh ==''|| $queQuan =='') {		
		echo '
		<script type="text/javascript">
			alert("Sửa danh mục lỗi. Vui lòng điền đầy đủ thông tin!!!");
			window.location.href="http://localhost/Profect1/edit_student.php?id=$id";
		</script>';
	} else {
	$sql = "UPDATE users SET hoTen='$hoTen', email='$email', password='$password', image='$image',age='$age',gioiTinh='$gioiTinh',queQuan='$queQuan'   WHERE id='$id'";
	}
	
	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Sửa sản phẩm thành công!!!");
			window.location.href="http://localhost/Profect1/list_student.php";
		</script>';
;?>