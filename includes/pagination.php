<div>
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

    <ul>
        <?php for ($i = 1; $i <= $paginator->totalPages; $i++): ?>
            <li>
                <a href="?page=<?= $i ?>"> <?= $i ?></a>
            </li>
        <?php endfor ?>
    </ul>
    </div>