<?php

require('../includes/init.php');

require('../includes/header.php');

$conn = require('../includes/database.php');

Auth::requireLogin();

$articles = Article::getAll($conn);

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

    <?php endforeach ?>

</main>

<?php

require('../includes/footer.php');

?>