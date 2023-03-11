<?php

require('includes/init.php');

require('includes/header.php');

$conn = require('includes/database.php');

$id = $_GET['id'];

$article = Article::getSingleArticle($conn, $id);


?>


<div class="container d-flex flex-column justify-content-center align-items-center">
    <h2>
        <?= $article->title ?>
    </h2>

    <p>
        <?= $article->content ?>
    </p>

</div>