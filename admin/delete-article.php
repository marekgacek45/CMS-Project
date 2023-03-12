<?php
require('../includes/init.php');

$conn = require('../includes/database.php');

Auth::requireLogin();

$id = $_GET['id'];

if (isset($id)) {
    $article = Article::getSingleArticle($conn, $id);

    if (!$article) {
        die('nie ma takiego artykułu');
    }
} else {
    die('nie ma takiego id');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($article->delete($conn)) {
        header("Location:index.php");
    }
}

?>
<?php  require('../includes/header.php')?>

<form action="" method="post">
    <button>usuń</button>
</form>


<?php  require('../includes/footer.php')?>