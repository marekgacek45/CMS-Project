<?php 
if (!empty($article->errors)): ?>
    <ul>
        <?php foreach ($article->errors as $error): ?>
            <li>
                <?php echo $error; ?>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>



<div>

    <form method="post">
    <div>
        <label for='title'>Tytuł: </label>
        <input type="text" name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($article->title) ?>">
    </div>

    <div>
        <label for="content"> Treść:</label>
        <textarea name="content" id="content" cols="30" rows="10"
            placeholder="article content"><?= htmlspecialchars($article->content) ?></textarea>
    </div>

            <label for="date">Data:</label><input type="date" name="date" id="date">
        </div>
        <button><a href="index.php">Cofnij</a></button>
    <button type="submit">Zapisz</button>
    </form>
</div>