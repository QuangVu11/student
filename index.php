<?php
session_start();
include_once('connect.php');
if ((isset($_SESSION['email']) && isset($_SESSION['password']) OR isset($_COOKIE['rememberemail']))) {
    include_once('list_student.php');
}else {
    include_once('login.php');
}
?>