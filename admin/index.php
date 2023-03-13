<?php

require('../includes/init.php');

require('../includes/header.php');

$conn = require('../includes/database.php');

Auth::requireLogin();

$totalArticle = Article::getTotalPages($conn);

$paginator = new Paginator($_GET['page'] ?? 1, 10, $totalArticle);

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>

<main class="container">



    <a href="add-article.php"><button>Dodaj wpis</button></a>



    <?php foreach ($articles as $article): ?>

        <h2>
            <?= htmlspecialchars($article["title"]); ?>
        </h2>
        <p>
            <?= htmlspecialchars($article["content"]); ?>
        </p>
        <p>
            <?= htmlspecialchars($article["published_at"]); ?>
        </p>

        <a href="article.php?id=<?= $article['id'] ?>">czytaj</a>
    <?php endforeach ?>

</main>

<?php require('../includes/pagination.php') ?>

<?php

require('../includes/footer.php');

?>