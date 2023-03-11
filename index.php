<?php

require('includes/init.php');

require('includes/header.php');

$conn = require('includes/database.php');

$articles = Article::getAll($conn);

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