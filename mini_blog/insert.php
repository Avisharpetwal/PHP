<?php
include "config1.php";

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");

}
?>

<h1>Add Post</h1>
<form method="POST">
    Title: <br>
    <input type="text" name="title" required><br><br>
    Content: <br>
    <textarea name="content" required></textarea><br><br>
    <input type="submit" name="submit" value="Add Post">
</form>
<a href="index.php">Back</a>