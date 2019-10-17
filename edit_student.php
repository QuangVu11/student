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
<h2>Sửa học sinh</h2>
<?php
    include("connect.php");
?>       
    <form method="post" action="edit_student_perform.php" enctype="multipart/form-data">
                       <?php
                            include("connect.php");
                            $id = $_GET["id"];
                            $sql = "select * from users where id = ".$id;
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($run);
                        ?>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >ID<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="id" value="<?php echo $row["id"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Họ và tên<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="hoTen" value="<?php echo $row["hoTen"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Email<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="email" value="<?php echo $row["email"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Password<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="password" value="<?php echo $row["password"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Image<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="file" name="image" id="upload-thumb" value="<?php echo $row['image']?>">
                <div class="tbody-thumb">
                    <img width="100px" src="image/<?php echo $row['image']?>" alt="">.
                </div>
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tuổi<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="age" value="<?php echo $row["age"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Giới tính<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="gioiTinh" value="<?php echo $row["gioiTinh"];?>">
            </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Quê quán<span class="">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="queQuan" value="<?php echo $row["queQuan"];?>">
            </div>
        <br>
            <div class="control-label col-md-3 col-sm-3 col-xs-12" >
                <button type="submit" ><a href="edit_student_perform.php"></a>Thêm mới học sinh</button>
            </div>
</form>
</div>
</body>
</html>