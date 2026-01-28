<?php include "../partials/header.php";?>

<form action= "store.php" method="POST">
<p>Name:<input type="text" name= "name" required></p>
<p>Email:<input type="email" name="email" required></p>
<p>Roll No:<input type="text" name="roll_number" required></p>
<p>Class:<input type="text" name="class"></p>
<p>Marks:<input type="number" name="marks" min="0" max="100"></p>
<button type="submit">Save</buttom>

</form>
<?php include "../partials/footer.php"; ?>