<?php

require('../includes/init.php');

require('../includes/header.php');

$conn = require('../includes/database.php');

$id = $_GET['id'];

var_dump($_GET);

$article = Article::getSingleArticle($conn, $id);


?>


<div class="container d-flex flex-column justify-content-center align-items-center">
    <h2>
        <?= $article->title ?>
    </h2>

    <p>
        <?= $article->content ?>
    </p>
    <div>
        <a href="edit-article.php?id=<?= $id ?>"><button>edit</button></a>
        <button>delete</button>
    </div>


</div>


<?php require('../includes/footer.php') ?>