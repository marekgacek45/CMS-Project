<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($paginator->previous): ?>
            <li class="page-item">
                <a class="page-link" aria-label="Previous" href="?page=<?= $paginator->previous ?>"> <span
                        aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span></a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <a class="page-link" aria-label="Previous" href="#">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span></a>
                </a>
            </li>
        <?php endif ?>

        <?php for ($i = 1; $i <= $paginator->totalPages; $i++): ?>
            <li class="page-link" class="page-item">
                <a href="?page=<?= $i ?>"> <?= $i ?></a>
            </li>
        <?php endfor ?>


        <?php if ($paginator->next): ?>
            <li class="page-item">
                <a class="page-link" aria-label="Next" href="?page=<?= $paginator->next ?>"> <span
                        aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span></a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <a class="page-link " aria-label="Next" href="#">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        <?php endif ?>



    </ul>


</nav>