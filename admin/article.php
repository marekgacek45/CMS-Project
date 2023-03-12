<?php

require('../includes/init.php');

require('../includes/header.php');

$conn = require('../includes/database.php');

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
    <div>
        <a href="edit-article.php?id=<?= $id ?>"><button>edytuj</button></a>
        <a href="delete-article.php?id=<?= $id ?>"><button>usuń</button></a>
    </div>


</div>


<?php require('../includes/footer.php') ?>