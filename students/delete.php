<?php
require_once __DIR__ . '/../config/db.php';


$id = (int) $_POST['id'];
mysqli_query($conn, "DELETE FROM students WHERE id = $id");
header("Location: index.php");
exit;