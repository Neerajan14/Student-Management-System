<?php 
require "../config/db.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$rool_number = mysqli_real_escape_string($conn, $_POST['roll_number']);
$class = mysqli_real_escape_string($conn, $_POST['class']);
$marks = mysqli_real_escape_string($conn, $_POST['marks']);

if ($marks<0 || $marks>100){
    die("Marks should be between 0 and 100");
}

$sql = "INSERT INTO students (name, email, roll_number, class, marks) VALUES ('$name', '$email', '$rol_number', '$class', $marks)";
mysqli_query($conn, $sql);
header("Location: index.php");
exit;
