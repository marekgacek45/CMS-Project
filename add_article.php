<?php

require('classes/Database.php');
require('classes/Article.php');

$article = new Article();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $db = new Database();
    $conn = $db->getConn();

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];
    
    if ($article->create($conn)) {
        header('Location:index.php');
    }
}

?>


<?php
require('includes/header.php')
    ?>

<form method="post">
    <label for="title">Tytuł:</label><input type="text" name="title" id="title">
    <label for="content">Wpisz treść:</label><textarea name="content" id="content" cols="30" rows="10"></textarea>
    <label for="date">Data:</label><input type="date" name="date" id="date">
    <button type="submit">Dodaj</button>
</form>


<?php require('includes/footer.php') ?>