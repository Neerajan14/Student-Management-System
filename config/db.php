<?php 
$conn = mysqli_connect("localhost", "root", "your_root_password", "student_management");
if(!$conn){
    die("Database connection failed:". mysqli_connect_error());
}