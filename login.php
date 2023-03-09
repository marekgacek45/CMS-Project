<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {

session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        header('Location:index.php');

    } else {
       echo "invalid";
       
    }
}

?>




<?php require('includes/header.php') ?>

<form  method="post">
    <label for="username">username:</label><input type="text" name="username" id="username">
    <label for="username">password:</label><input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>


<?php require('includes/footer.php') ?>