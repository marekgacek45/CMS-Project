<?php

require('../includes/init.php');

Auth::requireLogin();

$article = new Article();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $conn = require('../includes/database.php');

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    // $article->published_at = $_POST['published_at'];

    if ($article->create($conn)) {
        header('Location:index.php');
    }
}

?>


<?php
require('../includes/header.php')
    ?>



<h2>Dodaj nowy artykuł:</h2>

<?php require('includes/article-form.php') ?>


<?php require('../includes/footer.php') ?>


<!--
1.Poprawić żeby wyskakiwał błąd jeżeli tytuł już występuje

 -->