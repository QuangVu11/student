<?php
session_start();
	$tenmaychu="localhost";
	$tentaikhoan="newuser";
	$pass="password";
	$csdl="student";
	$conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die("Không kết nối được");
	
?>