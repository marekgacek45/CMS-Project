<?php

require('../includes/init.php');

$conn = require('../includes/database.php');

Auth::isLoggedIn();



if (isset($_GET['id'])) {
    $article = Article::getSingleArticle($conn, $_GET['id']);

    if (!$article) {
        die('nie ma takiego artykułu');
    }
} else {
    die('nie ma takiego id');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    // $article->published_at = $_POST['published_at'];

    if ($article->update($conn)) {
        // header('Location:index.php');
    }
}

?>


<?php
require('../includes/header.php')
    ?>



<h2>Edytuj treść artykułu:</h2>

<?php require('includes/article-form.php') ?>


<?php require('../includes/footer.php') ?>