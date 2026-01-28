<?php
require "../config/db.php";

$id = (int) $_POST['id'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$roll = mysqli_real_escape_string($conn, $_POST['roll_number']); 
$class = mysqli_real_escape_string($conn, $_POST['class']);
$marks = (int) $_POST['marks'];

mysqli_query($conn,
    "UPDATE students SET 
    name = '$name',
    email = '$email',
    roll_number = '$roll',
    class = '$class',
    marks = $marks
    WHERE id = $id
    ");
    header("Location: index.php");
    exit;