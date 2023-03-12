<?php

require('includes/init.php');

require('includes/header.php');

$conn = require('includes/database.php');

$totalArticle = Article::getTotalPages($conn);

$paginator = new Paginator($_GET['page'] ?? 1, 5,$totalArticle);

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>

<main class="container">


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

    <ul>
        <li>
            <?php if ($paginator->previous): ?>
                <a href="?page=<?= $paginator->previous ?>">previous</a>
            <?php else: ?>
                previous
            <?php endif ?>
        </li>
        <li>
            <?php if ($paginator->next): ?>
                <a href="?page=<?= $paginator->next ?>">next</a>
            <?php else: ?>
                next
            <?php endif ?>
        </li>


    </ul>

</main>

<?php

require('includes/footer.php');

?>