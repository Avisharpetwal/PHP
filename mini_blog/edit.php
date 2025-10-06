<?php
include "config1.php";
echo"<br>";
 
if(!isset($_GET['id'])){
    echo "No post ID provided!";
    exit;
}

$id = (int)$_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
 
// Update post if form is submitted
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");

//     // Redirect back to index
//     header("Location: index.php");
//     exit;
}
?>

<h1>Edit Post</h1>

<form method="POST">
    Title:<br>
    <input type="text" name="title" value="<?php echo $post['title']; ?>"><br><br>
    Content:<br>
    <textarea name="content"><?php echo $post['content']; ?></textarea><br><br>
    <input type="submit" name="submit" value="Update Post">
</form>

<a href="index.php">Back</a>