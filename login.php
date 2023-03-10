<?php

require('includes/header.php') ;

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {

session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;
        
        $_SESSION['username'] = $_POST['username'];

        header('Location:index.php');
        
         


        

    } else {
       echo "invalid";
       
    }
}

?>


<div class="container">

    <form  method="post">
        <label for="username">username:</label><input type="text" name="username" id="username">
        <label for="username">password:</label><input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
</div>


<?php require('includes/footer.php') ?>