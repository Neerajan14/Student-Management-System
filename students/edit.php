<?php 
require "../config/db.php";
include "../partials/header.php";

$id = (int) $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");

if(mysqli_num_rows($result) == 0){
    die("Student not found");
}
?>

<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?= $student['id'] ?>">
<p>Name:<input name="name" value="<?= $student['name'] ?>"></p>
<p>Email:<input name="email" value="<?= $student['email'] ?>"></p>
<p>Roll:<input name="roll_number" value="<?= $student['roll_number'] ?>"></p>
<p>Class:<input name="class" value="<?= $student['class'] ?>"></p>
<p>Marks:<input name="marks" value="<?= $student['marks'] ?>"></p>
<button>Update</button>
</form>

<?php include "../partials/footer.php";?>