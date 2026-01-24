 <?php
include "db.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<h2>Add Post</h2>
<form method="post">
    <input type="text" name="title" placeholder="Post title" required><br><br>
    <textarea name="content" placeholder="Post content" required></textarea><br><br>
    <button name="submit">Add Post</button>
</form>