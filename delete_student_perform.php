<?php 
    $id = $_GET['id'];
    include("connect.php");
    $sql = "delete from users where id = '".$id."'";
    $run = mysqli_query($conn,$sql);
    echo '
        <script>
            alert("Xóa học sinh thành công!!!");
            window.location.href="http://localhost/Profect1/list_student.php";
        </script>';
;?>