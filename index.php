<?php


require('includes//header.php');
require('classes/Database.php');

$db = new Database();
$conn = $db->getConn();



    ?>

<main>

    <p>main page</p>
</main>


<?php

require('includes/footer.php');

    ?>