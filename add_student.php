<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Thêm học sinh</h2>
<?php
    include("connect.php");
?>       
<form method="post" action="add_student_perform.php" enctype="multipart/form-data">
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Họ và tên<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="hoTen" >
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Email<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="email" >
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Password<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="password" name="password" >
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Image<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="file" name="image" id="upload-thumb">
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tuổi<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="age" >
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Giới tính<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="gioiTinh" >
            </div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Quê quán<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="queQuan" >
            </div>
        <br>
            <div class="control-label col-md-3 col-sm-3 col-xs-12" >
                <button type="submit" ><a href="add_student_perform.php"></a>Thêm mới học sinh</button>
            </div>
</form>
</div>
</body>
</html>