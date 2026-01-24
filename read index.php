<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
?>

<h2>All Posts</h2>
<a href="add_post.php">+ Add New Post</a><br><br>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>

    <a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a> |
    <a href="delete_post.php?id=<?php echo $row['id']; ?>">Delete</a>
    <hr>
<?php } ?>