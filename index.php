<?php

require('includes/init.php');

require('includes/header.php');

$conn = require('includes/database.php');

$paginator = new Paginator(1,5);

$articles = Article::getPage($conn,$paginator->limit,$paginator->offset);

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

</main>

<?php

require('includes/footer.php');

?>