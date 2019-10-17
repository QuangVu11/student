<!DOCTYPE html>
<html lang="en">
<head>
<title>Sun</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">


    <h3>Welcome</h3>
 <!-- <a href="list_student.php?action=logout">logout</a> -->
    <h2>Danh sách học sinh</h2>
    <p>Danh sách học sinh trường THPT </p> 
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">Danh sách</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="add_student.php">Thêm học sinh</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
</ul>     
  <table class="table">
    <thead>
      <tr>
        <th>Mã học sinh</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Image</th>
        <th>Tuổi</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include("connect.php");
      $sql = "select * from users order by id asc";
      $run = mysqli_query($conn, $sql);
      $i = 0;
      while ($row = mysqli_fetch_array($run)) {
      $i++;
      ;?>
      <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["hoTen"];?></td>
        <td><?php echo $row["email"];?></td>
        <td>
            <div class="tbody-thumb">
              <img width="100px" src="image/<?php echo $row['image']?>" alt="">.
            </div>
        </td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["gioiTinh"];?></td>
        <td><?php echo $row["queQuan"];?></td>
        <td><a href="edit_student.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Sửa</a></td>
        <td><a href="delete_student_perform.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Xóa</a></td>
      </tr>
      <?php  };?>
    </tbody>
  </table>
</div>
</body>
</html>