<?php

require('includes//header.php');
require('classes/Database.php');
require('classes/Article.php');

$db = new Database();
$conn = $db->getConn();

$articles = Article::getAll($conn);

?>

<main>

    <a href="add_article.php"><button>Dodaj wpis</button></a>

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

    <?php endforeach ?>

</main>

<?php

require('includes/footer.php');

?>