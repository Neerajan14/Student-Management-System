<?php
require "../config/db.php";
include "../partials/header.php";

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<table>
<tr>
    <th>Name</th>
    <th>Roll</th>
    <th>Class</th>
    <th>Marks</th>
    <th>Actions</th>
</tr>

<?php if (mysqli_num_rows($result) > 0): ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['roll_number']) ?></td>
        <td><?= htmlspecialchars($row['class']) ?></td>
        <td><?= htmlspecialchars($row['marks']) ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <form action="delete.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button onclick="return confirm('Delete student?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
<?php else: ?>
<tr><td colspan="5">No students found</td></tr>
<?php endif; ?>

</table>

<?php include "../partials/footer.php"; ?>
